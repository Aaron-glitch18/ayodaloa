// import { ScrollView } from '@expo/ui';
import { FontAwesomeFreeSolid } from "@react-native-vector-icons/fontawesome-free-solid";
import { Link } from "expo-router";
import { Image, Pressable, ScrollView, StyleSheet, Text, View } from "react-native";
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';
import { SafeAreaView } from 'react-native-safe-area-context';

const header=require('@/assets/images/asset_ayodaloa/edu6.jpg');
const touris=require('@/assets/images/asset_ayodaloa/edu2.jpg');
const agri=require('@/assets/images/asset_ayodaloa/edu4.jpg');

export default function Index() {
  return (
    <SafeAreaView style={styles.container}>
  
      <View style={styles.top}>
        
        <Text style={{fontSize:30,fontWeight:"bold"}}>Business & Service</Text>
          <View style={{flexDirection:"row" ,gap:10}}>
            <Link href={'/add'} style={styles.fontbtn}>
            <FontAwesomeFreeSolid name="add" size={20} color="white" /></Link>{/* ajout du lien vers la page d'ajout */}
            <Link href={'/chat'} style={styles.fontbtn}>
              <FontAwesomeFreeSolid name="message" size={20} color="white" />
            </Link>
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
      {/* <Text style={styles.rowTitle}>Service Public Rapide</Text> */}
      {/* block en dessous de l'image de tête */}
      <View style={styles.row_block}>

        <View style={styles.littlerow}>
          {/* <FontAwesomeFreeSolid name="clipboard-list" size={20} color={"#954A00"} style={styles.icon}/>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Etat Civil</Text> */}
          <Text style={{textAlign:"center",color:"#999"}}>Public</Text>
        </View>

        <View style={styles.littlerow}>
          {/* <FontAwesomeFreeSolid name="wallet" size={20} color={"#954A00"} style={styles.icon}/>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Etat Civil</Text> */}
          <Text style={{textAlign:"center",color:"#999"}}>Sous-traitant</Text>
        </View>

        <View style={styles.littlerow}>
          {/* <FontAwesomeFreeSolid name="building" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Urbanisme</Text> */}
          <Text style={{textAlign:"center",color:"#999"}}>Agirculture</Text>
        </View>

        <View style={styles.littlerow}>
          {/* <FontAwesomeFreeSolid name="building" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>
          <Text style={{fontWeight:'bold',textAlign:"center"}}>Urbanisme</Text> */}
          <Text style={{textAlign:"center",color:"#999"}}>Education</Text>
        </View>
        
      </View>
      {/* ==================================== */}
      {/* <View style={{flexDirection:"row",alignItems:"center",justifyContent:"space-around",gap:wp("42%")}}>

        <Text style={styles.rowTitle}>À l'affiche</Text>
        <Link href={'/actualite'} style={{marginTop:hp("1")}}>
          <View style={{flexDirection:"row",alignItems:"center",justifyContent:"center",gap:10}}>
            <Text style={{paddingTop:hp("2%"),fontWeight:200}}>
              voir plus
            </Text>
            <FontAwesomeFreeSolid name="arrow-right" size={15} color={"#555"} style={{paddingTop:hp("2%")}}/>
          </View>
        </Link>

      </View> */}
      
      <View style={styles.actuBloc} >

        <View style={styles.littleactu}>

          <Image source={header} style={{borderRadius:15, width:wp("40%"),height:hp("24%")}}/>
          {/* <FontAwesomeFreeSolid name="wallet" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>*/}
          <View style={{paddingRight:wp("40%"),paddingLeft:wp("5%")}}>

            <Text style={{fontWeight:'bold',fontSize:20, marginTop:5,marginBottom:10}}>Etat Civil Lorem, ipsum dolor sit</Text>
            <Text style={{color:"#999"}}>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, quos. Nobis aperiam ullam officia unde? Eveniet itaque nulla
            </Text>

          </View>

        </View>
        <View style={styles.littleactu}>

          <Image source={agri} style={{borderRadius:15, width:wp("40%"),height:hp("24%")}}/>
          {/* <FontAwesomeFreeSolid name="wallet" size={20} color={"#954A00"} style={styles.icon}></FontAwesomeFreeSolid>*/}
          <View style={{paddingRight:wp("40%"),paddingLeft:wp("5%")}}>

            <Text style={{fontWeight:'bold',fontSize:20, marginTop:5,marginBottom:10}}>Etat Civil Lorem, ipsum dolor sit</Text>
            <Text style={{color:"#999"}}>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, quos. Nobis aperiam ullam officia unde? Eveniet itaque nulla
            </Text>

          </View>

        </View>

      </View>

      {/* <View style={styles.bartr}>
        <Text style={{fontSize:20, fontWeight:'bold'}}>Tourisme & Culture</Text>
        <Text style={{fontWeight:100}}>Explorez les richesses naturelles et le patrimoine culturel unique de Daloa.</Text>
      </View> */}

      {/* <View style={styles.tourism}>

        <Image source={touris} style={{width:wp("90%"),height:hp("25%"),marginVertical:0,borderRadius:20,position:"relative"}}/>
        <View style={styles.hover}></View>
        <Text 
        style={{
          fontWeight:"light",
          fontSize:25,
          position:"absolute",
          color:'white',
          top:wp("5"),
          bottom:0,
          right:0,
          left:wp("5"),
          }}
        >Réserve des Antilopes de Daloa</Text>
        <Text 
        style={{
          // paddingLeft:25,
          // paddingRight:25,
          // paddingTop:100, 
          fontWeight:"300",
          fontSize:20,
          position:"absolute",
          top:hp(11),
          bottom:0,
          left:wp(6),
          right:0,
          color:'white',
        }}>
          Une immersion totale dans la nature préservée du Haut-Sassandra, à la
          rencontre de la faune locale emblématique.
        </Text>

      </View> */}

      {/* <View style={styles.tourism}>

        <Image source={touris} style={{width:wp("90%"),height:hp("25%"),marginVertical:0,borderRadius:20,position:"relative"}}/>
        <View style={styles.hover}></View>
        <Text 
        style={{
          fontWeight:"light",
          fontSize:25,
          position:"absolute",
          color:'white',
          top:wp("5"),
          bottom:0,
          right:0,
          left:wp("5"),
        }}
        >Cacao: le segment de la transformation suscite un intérêt de croissance</Text>
        <Text 
        style={{
          fontWeight:"300",
          fontSize:20,
          position:"absolute",
          top:hp(14),
          bottom:0,
          left:wp(6),
          right:0,
          color:'white',
        }}>
          le groupe présent en Côte d'ivoire dépuis plus de 60 ans à travers sa filiale SACO.
        </Text>

      </View> */}


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
    gap:wp('5%'),
    marginTop:20,
    marginBottom:10,
    backgroundColor:'transparent',
  },
  header:{
    margin:'auto',
    borderRadius:20,
    position:"relative",
    // opacity:0.7,
    marginVertical:20,
  },
  tourism:{
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
    paddingLeft:10,
    // marginBottom:hp("1%"),
    // borderWidth:1,
  },
  row_block:{
    margin:"auto",
    marginTop:hp("2"),
    marginLeft:wp("15"),
    // alignItems:"center",
    justifyContent:"center",
    flexDirection:"row",
    // backgroundColor:'yellow',
    // borderWidth:1,
    gap:10,
    // width:wp("90%"),
    // height:hp('5%'),
    // marginBottom:-15 ,
  },
  littlerow:{
    // width:wp("22%"),
    // height:hp("4%"),
    // margin:"auto",
    // borderStyle:'dashed',
    borderWidth:1,
    paddingVertical:5,
    paddingHorizontal:15,
    borderRadius:15,
    backgroundColor:"white",
  },
  icon:{
    textAlign:"center",
  },
  actuBloc:{
    // margin:"auto",
    alignItems:"center",
    justifyContent:"center",
    // flexDirection:"row",
    // backgroundColor:'yellow',
    gap:15,
    marginTop:hp("4%"),
    backgroundColor:"white",
    // width:wp("90%"),
    // height:hp('30%'),
    // borderWidth:1,
    // position:"relative",
  },
  littleactu:{
    width:wp("90%"),
    // height:hp("25%"),
    margin:"auto",
    borderStyle:'solid',
    borderWidth:1,
    padding:5,//supprime l'espace entre l'image
    borderRadius:15,
    flexDirection:"row",
    alignItems:"center",
    justifyContent:"space-around",
    // gap:"40",
    },
    bartr:{
      marginTop:hp("5%"),
      marginBottom:hp("2%"),
      // borderWidth:1,
      marginHorizontal:hp("2%"),
      padding:20,
      gap:15,
      borderRadius:20,
      backgroundColor:"#f3f0ed",

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
