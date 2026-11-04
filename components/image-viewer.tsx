import { Image, type ImageSource } from 'expo-image';
import { StyleSheet } from 'react-native';
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';

type Props = {
  imgSource: ImageSource;
  selectedImage?:string;
};

export default function ImageViewer({ imgSource,selectedImage }: Props) {
    const ImageSource = selectedImage ? {uri: selectedImage} : imgSource; 
  return <Image source={imgSource} style={styles.image} />;
}

const styles = StyleSheet.create({
  image: {
    height:hp(15),
    width:wp(60),
    borderWidth:1
  },
});
