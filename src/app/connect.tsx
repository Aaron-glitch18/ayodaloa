import { KeyboardAvoidingView, Pressable, StyleSheet, Text, TextInput, View } from 'react-native';
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';
import { useState } from 'react';
import { Link } from 'expo-router';


export default function Home(){
        const [email,setEmail]=useState('');
        const[mdp,setMdp]=useState('');
        const[output,setOutput] = useState('');


    async function data_send() {
        
          if(!email.trim() || !mdp.trim()){

              setOutput("Veuillez remplir tout les champs");
            
                return;
            }
                // console.log("champs remplis");
                // console.log(email,mdp,cmdp);
            try{

                const rep= await send_data(email,mdp);
                console.log(rep);

                if(rep?.status === "success"){
                    setOutput("connexion réussie");

                }else{
                    setOutput(rep?.message || "Identifiants incorrects")
                }
            }catch(error){
                setOutput("une erreur est survenu"+error)
                // console.error(error);
            }

                // return rep;

    }
    // const output= data_send();


    async function send_data(email:string,mdp:string) {

        const url="https://ayodaloa.onrender.com/connect"

        // try{
            const req= await fetch(url,{

                method:'POST',
                headers:{
                    'Content-Type':'application/json'
                },
                body:JSON.stringify(
                    {
                        email:email,
                        mdp:mdp,
                    }
                )
            });

            if(!req.ok){
                throw new  Error("une erreur http"+req.status);
            }
            const data=await req.json();
            return data;

        // }

    }

    return(
        <KeyboardAvoidingView
        behavior='padding'
        style={styles.contain}
        >

            <View style={{paddingTop:hp(13)}}>

                <Text style={{fontSize:17, color:"white",paddingHorizontal:wp("10")}}>Connecté vous pour une expérience amélioré</Text>
                <Text style={{fontSize:45,color:"white",fontWeight:"bold",paddingLeft:wp("10")}}>Login</Text>

            </View>

            <View style={styles.formBloc}>
                <View style={{gap:10}}>

                <Text style={{fontSize:17}}>Email</Text>
                <TextInput 
                    placeholder='username@gmail.com' 
                    placeholderTextColor={"grey"}
                    style={styles.input}
                    value={email}
                    onChangeText={setEmail}
                    keyboardType='email-address'

                />

                </View>
                <View style={{gap:10}}>

                <Text style={{fontSize:17}}>Mot de passe</Text>
                <TextInput  
                    placeholder='Veuillez saisir votre mot de passe' 
                    placeholderTextColor={"grey"}
                    secureTextEntry={true}
                    autoCapitalize='none'
                    autoCorrect={false}
                    style={styles.input}
                    accessibilityLabel='Password'
                    maxLength={15}
                    value={mdp}
                    onChangeText={setMdp}

                />
                <Text style={{textAlign:'center'}}>{output}</Text>

                </View>
                <Pressable style={styles.log} onPress={data_send}>
                    <Text style={{textAlign:"center",color:"white",fontSize:20}}>Login</Text>
                </Pressable>
            <Text >j'ai oublié <Link href={'/connect'} style={{fontStyle:"italic"}}>mon mot de passe</Link></Text>  
            </View>
            
        </KeyboardAvoidingView>
        
    );
}
const styles=StyleSheet.create({

    contain:{
        flex:1,
        alignContent:"center",
        justifyContent:"space-between",
        backgroundColor:"#954a00",
    },
    formBloc:{
        height:hp(65),
        backgroundColor:'#fff',
        borderTopRightRadius:60,
        borderTopLeftRadius:60,
        alignItems:"center",
        // justifyContent:"center",
        paddingTop:hp(7),
        gap:25,
    },
    input:{
        backgroundColor:"#eee",
        paddingHorizontal:15,
        paddingVertical:20,
        width:wp(75),
        // textAlign:"center",
        fontSize:16,
        color:"black",
        borderRadius:15,
    },
    log:{
    backgroundColor:'#954a00',
    borderRadius:50,
    paddingVertical:14,
    paddingHorizontal:30,
    width:wp(75),
    marginTop:20,
  },
  textWithDivider: {
    color: "white",
    marginVertical: 10,
    paddingHorizontal: 10
}

})
