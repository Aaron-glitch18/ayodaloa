import { useState } from 'react';
import { KeyboardAvoidingView, Pressable, ScrollView, StyleSheet, Text, TextInput, View } from 'react-native';
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';
import { useSafeAreaInsets } from 'react-native-safe-area-context';
import { Link } from 'expo-router';
// import {KeyboardAvoi}

export default function Home(){
    const [email,setEmail]=useState('');
    const[mdp,setMdp]=useState('');
    const[cmdp,setCmdp]=useState('');
    const[output,setOutput]=useState('');
    

    async function data_send() {
        
        if(!cmdp.trim() || !email.trim() || !mdp.trim()){

                setOutput("Veuillez remplir tout les champs");
                return
  
        }

        try{

            const rep= await send_data(email,mdp,cmdp);
            console.log(rep);

            if(rep?.status == 200){
                setOutput("connexion réussi")
            }else{
                setOutput("Indentifiant incorrect");
            }

        }catch(error){
            console.log(error);
                // console.log("champs remplis");
                return;

    }
    }
    // const output = data_send();
    // console.log(rep);

    // envoie des donner à l'endpoint de traitement
    async function send_data(email:string,mdp:string,cmdp:string) {

        const url="https://ayodaloa.onrender.com/inscris"

        try{
            const req= await fetch(url,{

                method:'POST',
                headers:{
                    'Content-Type':'application/json'
                },
                body:JSON.stringify(
                    {
                        email:email,
                        mdp:mdp,
                        cmdp:cmdp
                    }
                )
            });
            const data=await req.json();
            // console.log(req);
            return data;

        }catch(error){
            console.error("Une erreur est survenu"+error);

        }

    }
// const insets = useSafeAreaInsets();

    return(
        <KeyboardAvoidingView
        behavior='padding'
        style={styles.contain}
        >
        {/* <View style={styles.contain}> */}

            <View style={{paddingTop:hp(10)}}>

                <Text style={{fontSize:17, color:"white",paddingHorizontal:wp("10")}}>Découvrez de nouvelle opportunité avec Ayodaloa</Text>
                <Text style={{fontSize:45,color:"white",fontWeight:"bold",paddingLeft:wp("10")}}>Inscription</Text>

            </View>
                <View style={styles.formBloc}>
            {/* <ScrollView> */}

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
                        value={mdp}
                        onChangeText={setMdp}
                        maxLength={15}
                    />
                    <Text style={{fontSize:17}}>Confirmer votre mot de passe</Text>
                    <TextInput  
                        placeholder='Veuillez saisir à nouveau votre mot de passe' 
                        placeholderTextColor={"grey"}
                        secureTextEntry={true}
                        autoCapitalize='none'
                        autoCorrect={false}
                        style={styles.input}
                        accessibilityLabel='Password'
                        value={cmdp}
                        onChangeText={setCmdp}
                        maxLength={15}
                    />
                    <Text style={{textAlign:'center'}}>{output}</Text>
                    

                    </View>
                    <Pressable style={styles.log} onPress={data_send}>
                        <Text style={{textAlign:"center",color:"white",fontSize:20}}>Je m'inscris </Text>
                    </Pressable>
                    <Text >je souhaite me connecté à <Link href={'/connect'} style={{fontStyle:"italic"}}>mon compte</Link></Text>

            {/* </ScrollView> */}
                </View>
            
        {/* </View> */}
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
        marginBottom:5,
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
    marginTop:10,
  },
//   textWithDivider: {
//     color: "white",
//     marginVertical: 10,
//     paddingHorizontal: 10
// }

})
