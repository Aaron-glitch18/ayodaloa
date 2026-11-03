import FontAwesomeFreeSolid from '@react-native-vector-icons/fontawesome-free-solid';
import * as ImagePicker from 'expo-image-picker';
import { useState } from 'react';
import { KeyboardAvoidingView, Pressable, ScrollView, StyleSheet, Text, TextInput, View } from 'react-native';
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';
// import {KeyboardAvoi}

export default function Home(){
    const [selectedImage, setSelectedImage] = useState<string | undefined> (undefined);
    
    const pickImageAsync= async ()=>{
        const result = await ImagePicker.launchImageLibraryAsync({
            mediaTypes:"images",
            allowsEditing:true,
            quality:1,
        });

        if (!result.canceled){
            const link=result['assets'][0]['uri'];
            setSelectedImage(link)
            console.log(link);
        }else{
            alert('Image non sélectionné.');
        }
    };


// const insets = useSafeAreaInsets();

    return(
        <KeyboardAvoidingView
        behavior='padding'
        style={styles.contain}
        >
        {/* <View style={styles.contain}> */}


            <View style={{paddingTop:hp(10)}}>

                <Text style={{fontSize:35,color:"black",fontWeight:"bold",marginHorizontal:wp("10")}}>Ajouter vos services</Text>
                <Text style={{fontSize:17, color:"#954a00",marginLeft:wp("10"), marginTop:hp(3)}}>Remplissez le formulaire ci-dessous pour enregistrer,proposé vos services ou votre business.</Text>
                <Text 
                    style={{backgroundColor:"#ff8200",
                        padding:5,
                        width:wp(62),
                        marginLeft:wp("10"),
                        marginTop:hp(2),
                        fontStyle:"italic",
                        borderRadius:8,
                    }}
                >
                    Champs marqués * sont obligatoires
                </Text>
            </View>
                <ScrollView>
                <View style={styles.formBloc}>
                    <View style={{gap:10}}>


                    <View style={{alignContent:"flex-start",flexDirection:"row"}}>
                        <Text style={styles.label}>Où vous trouvez</Text>
                        <Text style={{color:"red", marginVertical:"auto"}}>*</Text>
                    </View>
                    <TextInput 
                        placeholder='Entrer la localisation de la structure' 
                        placeholderTextColor={"grey"}
                        style={styles.input}
                    />
    
                    </View>
                    <View style={{gap:10}}>

                    <View style={{alignContent:"flex-start",flexDirection:"row"}}>
                        <Text style={styles.label}>Secteur</Text>
                        <Text style={{color:"red", marginVertical:"auto"}}>*</Text>
                    </View>
                    <TextInput  
                        placeholder="Informatique,Restauration,Sous-traitant..." 
                        placeholderTextColor={"grey"}
                        style={styles.input}
                    />

                    <View style={{alignContent:"flex-start",flexDirection:"row"}}>
                        <Text style={styles.label}>Numéro de téléphone</Text>
                        <Text style={{color:"red", marginVertical:"auto"}}>*</Text>
                    </View>
                    <TextInput  
                        placeholder='XX XX XX XX XX' 
                        placeholderTextColor={"grey"}
                        style={styles.input}
                    />

                    <View style={{alignContent:"flex-start",flexDirection:"row"}}>
                        <Text style={styles.label}>Nom de la structure</Text>
                        <Text style={{color:"red", marginVertical:"auto"}}>*</Text>
                    </View>
                    <TextInput  
                        placeholder="O'Chaud !" 
                        placeholderTextColor={"grey"}
                        style={styles.input}
                    />

                    <View style={{alignContent:"flex-start",flexDirection:"row"}}>
                        <Text style={styles.label}>Decrivez vos services</Text>
                        <Text style={{color:"red", marginVertical:"auto"}}>*</Text>
                    </View>
                    <TextInput  
                        placeholder="O'Chaud !" 
                        placeholderTextColor={"grey"}
                        style={styles.input}
                    />

                    </View>

                    <View>

                        <Pressable onPress={pickImageAsync} style={styles.insert}>
                            <FontAwesomeFreeSolid name="image" size={20} color={"white"}/>
                            <Text style={{fontSize:15}}>sélectionez une photo</Text>
                        </Pressable>

                    </View>
                    <View style={{width:wp(50),height:hp(40)}}>
                        <Image source={selectedImage}></Image>
                    </View>

                    <Pressable style={styles.log}>
                        <Text style={{textAlign:"center",color:"white",fontSize:20}}>Je m'inscris </Text>
                    </Pressable>

               </View>
                    </ScrollView>
            
        {/* </View> */}
            </KeyboardAvoidingView>
        
    );
}
const styles=StyleSheet.create({

    contain:{
        flex:1,
        alignContent:"center",
        justifyContent:"space-between",
        backgroundColor:"#FCF9F6",
        
    },
    formBloc:{
        flex:1,
        // height:hp(65),
        backgroundColor:'#fff',
        borderTopRightRadius:60,
        borderTopLeftRadius:60,
        alignItems:"center",
        // justifyContent:"center",
        paddingTop:hp(3),
        marginTop:hp(3),
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
        marginVertical:20,
  },
  insert:{
    backgroundColor:'#c89a8a',
    // alignContent:"center",
    justifyContent:"center",
    flexDirection:"row",
    gap:10,
    borderRadius:50,
    paddingVertical:14,
    paddingHorizontal:30,
    width:wp(60),
    marginVertical:20,
    
  },
  label:{
    fontSize:17,
    marginVertical:10,
    marginRight:5
  }

})
