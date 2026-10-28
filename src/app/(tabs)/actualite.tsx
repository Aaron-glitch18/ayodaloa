import { FontAwesomeFreeSolid } from "@react-native-vector-icons/fontawesome-free-solid";
import { StyleSheet, Text, View } from "react-native";
import { widthPercentageToDP as wp } from 'react-native-responsive-screen';
import { SafeAreaView } from 'react-native-safe-area-context';

export default function Index() {
  return (
    <SafeAreaView style={styles.container}>

      <View style={styles.top}>
        <Text style={{fontSize:30,fontWeight:"bold"}}>Actualité</Text>
          <View style={{flexDirection:"row" ,gap:10}}>
            <FontAwesomeFreeSolid name="add" size={25} color="#954A00" style={styles.fontbtn} />
            {/* <FontAwesomeFreeSolid name="user-circle" size={25} color="#954A00" style={styles.fontbtn} /> */}
          </View>
      </View>

    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  top:{
    display:"flex",
    flexDirection:"row",
    alignItems:"center",
    justifyContent:"center",
    gap:wp('49%'),
    marginTop:25,

  },
  container: {
    flex: 1,
    // alignItems: "center",
    // justifyContent: "center",
    backgroundColor:"#FCF9F6",
  },
  fontbtn:{
    backgroundColor:'#eee',
    borderRadius:50,
    padding:10,
  },
});
