import Login from '@/assets/animations/Login.json';
import LottieView from "lottie-react-native";
import { Pressable, StyleSheet, Text, View } from "react-native";
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';
import { SafeAreaView } from 'react-native-safe-area-context';

const top=require('@/assets/images/asset_ayodaloa/account.jpg');

export default function Index() {
  return (
    <SafeAreaView style={styles.container}>

      <View style={styles.top}>
        <LottieView source={Login} style={{width:300,height:280}}
        // speed={1}
        autoPlay
        // containerStyle={styles.to}
        />
      </View>

        <View style={styles.blocText}>

          <Text 
          style={{fontSize:25, textAlign:"center", fontWeight:"bold"}}
          >
            Business à proposer?
          </Text>
          <Text style={styles.text}>
            Créez votre compte et donner l'occasion aux utilisateurs de vous connaître
          </Text>
          
        </View>

        <View style={{gap:20}}>
          <Pressable style={styles.btnCon}>
            <Text style={{color:"black",fontSize:17}}>Je souhaite me connecter</Text>
          </Pressable>
          <Pressable style={styles.btnReg}>
            <Text style={{color:"white",fontSize:17}}>Je souhaite créer un compte</Text>
          </Pressable>

        </View>

    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  top:{
    display:"flex",
    flexDirection:"row",
    alignItems:"center",
    justifyContent:"space-around",
    gap:wp('30%'),
    marginTop:25,

  },
  container: {
    flex: 1,
    alignItems: "center",
    // justifyContent: "center",
    backgroundColor:"#FCF9F6",
  },
  blocText:{
    marginVertical:hp("5"),
    marginHorizontal:wp(10),
    gap:20,
    // paddingHorizontal:16,
    // borderWidth:1,
  },
  text:{
textAlign:"center",
  },
  btnCon:{
    backgroundColor:'#dec1af',
    borderRadius:50,
    paddingVertical:20,
    paddingHorizontal:30,
  },
  btnReg:{
    backgroundColor:'#954a00',
    borderRadius:50,
    paddingVertical:20,
    paddingHorizontal:30,
  },
});
