import { ScrollView } from '@expo/ui';
import { FontAwesomeFreeSolid } from "@react-native-vector-icons/fontawesome-free-solid";
import { Link } from "expo-router";
import { Image, Pressable, StyleSheet, Text, View } from "react-native";
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';
import { SafeAreaView } from 'react-native-safe-area-context';

const header=require('@/assets/images/asset_ayodaloa/index2.jpg');

export default function Index() {
  return (
    <SafeAreaView style={styles.container}>
  
      <View style={styles.top}>
        
        <Text style={{fontSize:30,fontWeight:"bold"}}>Acceuil</Text>
          <View style={{flexDirection:"row" ,gap:10}}>
            <FontAwesomeFreeSolid name="add" size={25} color="white" style={styles.fontbtn} />
            {/* <FontAwesomeFreeSolid name="user-circle" size={25} color="#954A00" style={styles.fontbtn} /> */}
          
          </View>
       
      </View>
      <ScrollView>
      <View style={styles.header}>

        <Image source={header} style={{width:wp("90%"),height:hp("40%"),marginVertical:0,borderRadius:20,position:"relative"}}/>
        <View style={styles.hover}></View>
        <Text style={styles.hover_text1}>Daloa, Coeur du Haut-Sassandra</Text>
        <Text style={styles.hover_text2}>Bienvenue sur le portail officiel de la commune. Découvrez une ville
        dynamique, entre tradition agricole forte et innovation urbaine.
        </Text>
        
        <Pressable>
          <Link href={'/business_et_service'} style={styles.btn}>Explorer les services</Link> 
        </Pressable>

      </View>
      <Text style={styles.rowTitle}>Service Public Rapide</Text>
      {/* block en dessous de l'image de tête */}
      <View style={styles.row_block}>

        <View style={styles.littlerow}>
          <FontAwesomeFreeSolid name="clipboard-list" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Etat Civil</Text>
          <Text style={{textAlign:"center",color:"#999"}}>Actes, Naissances</Text>
        </View>

        <View style={styles.littlerow}>
          <FontAwesomeFreeSolid name="wallet" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Etat Civil</Text>
          <Text style={{textAlign:"center",color:"#999"}}>Lorem ipsum dolor</Text>
        </View>

        <View style={styles.littlerow}>
          <FontAwesomeFreeSolid name="building" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Urbanisme</Text>
          <Text style={{textAlign:"center",color:"#999"}}>Service d'état, ministériel</Text>
        </View>
        
      </View>
      {/* ==================================== */}
      <Text style={styles.rowTitle}>À l'affiche</Text>
      <View style={styles.actuBloc} >

        <View style={styles.littleactu}>
          <FontAwesomeFreeSolid name="wallet" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Etat Civil</Text>
          <Text style={{textAlign:"center",color:"#999"}}>Lorem ipsum dolor</Text>
        </View>

        <View style={styles.littleactu}>
          <FontAwesomeFreeSolid name="building" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Urbanisme</Text>
          <Text style={{textAlign:"center",color:"#999"}}>Service d'état, ministériel</Text>
        </View>

      </View>
      </ScrollView>

      
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({

  top:{
    display:"flex",
    flexDirection:"row",
    alignItems:"center",
    justifyContent:"center",
    gap:wp('55%'),
    marginTop:20,
    backgroundColor:'transparent',
  },
  header:{
    margin:'auto',
    borderRadius:20,
    position:"relative",
    // opacity:0.7,
    marginVertical:20,
  },
  hover:{
    position:"absolute",
    top:0,
    borderRadius:20,
    backgroundColor:"#000",
    opacity:0.5,
    // paddingHorizontal:30,
    right:0,
    left:0,
    bottom:0,
  },

  hover_text1:{
    paddingLeft:20,
    paddingTop:50, 
    fontWeight:'bold',
    fontSize:27,
    position:"absolute",
    color:'white',
  },
  hover_text2:{
    paddingLeft:25,
    paddingRight:100,
    paddingTop:135, 
    fontWeight:'300',
    fontSize:20,
    position:"absolute",
    color:'white',
  },
  btn:{
    position:"absolute",
    bottom:20,
    left:25,
    backgroundColor:"#954A00",
    paddingHorizontal:15,
    paddingVertical:10,
    fontSize:20,
    color:"white",
    borderRadius:10
  },
  rowTitle:{
    paddingTop:hp("2%"),
    fontSize:20,
    fontWeight:"bold", 
    paddingLeft:15,
    // marginBottom:hp("1%"),
    // borderWidth:1,
  },
  row_block:{
    margin:"auto",
    // marginTop:-1.5,
    alignItems:"center",
    justifyContent:"center",
    flexDirection:"row",
    // backgroundColor:'yellow',
    gap:10,
    width:wp("90%"),
    height:hp('20%'),
    marginBottom:-15 ,
  },
  littlerow:{
    width:wp("29%"),
    height:hp("13%"),
    // margin:"auto",
    borderStyle:'solid',
    borderWidth:1,
    padding:15,
    borderRadius:15,
  },
  icon:{
    textAlign:"center",
  },
  actuBloc:{
    // margin:"auto",
    alignItems:"center",
    justifyContent:"center",
    flexDirection:"row",
    // backgroundColor:'yellow',
    gap:10,
    marginTop:hp("4%"),
    // width:wp("90%"),
    // height:hp('30%'),
  },
  littleactu:{
    width:wp("90%"),
    height:hp("20%"),
    // margin:"auto",
    borderStyle:'solid',
    borderWidth:1,
    padding:15,
    borderRadius:15,
    },
  container: {
    flex: 1,
    backgroundColor:"#FCF9F6",
    height:hp("100%"),
  },
  fontbtn:{
    backgroundColor:'#954A00',
    borderRadius:25,
    paddingHorizontal:10,
    paddingVertical:7,
  },

});
