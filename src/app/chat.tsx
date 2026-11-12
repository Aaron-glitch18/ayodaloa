import FontAwesomeFreeSolid from '@react-native-vector-icons/fontawesome-free-solid';
import { useEffect, useRef, useState } from 'react';
import {
    Alert,
    FlatList,
    // ImageBackground,
    KeyboardAvoidingView,
    Linking,
    StyleSheet,
    TextInput,
    View,
    Pressable
} from 'react-native';
// import { TypingIndicator } from 'react-native-chat-typing-indicator';
import ParsedText from 'react-native-parsed-text';
import Animated, { FadeInDown } from 'react-native-reanimated';
import { heightPercentageToDP as hp, widthPercentageToDP as wp } from 'react-native-responsive-screen';
//instance de modèle pour gérer les saisie user et la reponse IA
interface Message {
    id: string;
    text: string;
    sender?: 'user' | 'bot';
}

const Home = () => {

    const handlUrlPress = (url: string) => {
        Linking.openURL(url);
    };
    //fonction pour l'appel

    const handlPhonePress = (phone: string) => {
        Linking.openURL(`telprompt:${phone}`);
        console.log("la touche d'appel à  été touché et le numéro est " + `${phone}`);
    };

    // nous avons diviser la fonction d'appel pour la transformé en appel whatsApp
    const chatWhatsapp = (phone: string) => {
        const numero = phone.replace(/\D/g, '');
        Linking.openURL(`https://wa.me/${numero}`);
    };

    const handlEmailPress = (email: string) => {
        Linking.openURL(`mailto:${email}`);
    };

    // fonction gérant les alertes pour le choix entre appel vocal ou redirection vers whatsApp
    const createThreeButtonAlert = (phone: string) =>
        Alert.alert('Alert Title', 'Quel action souhaitez-vous effectuer ?', [
            {
                text: 'Continuer la discussion',
                onPress: () => console.log("la touche d'appel à été touché"),
            },
            {
                text: 'Discutons sur Whatsapp',
                onPress: () => chatWhatsapp(phone),
            },
            {
                text: 'Appel',
                onPress: () => handlPhonePress(phone),
                style: 'cancel',
            },
        ]);

    // ---------------------------------------------------------------------

    // ce sont les variables permettant de mettre à jour les questions de l'utilisateur
    const [question, setQuestion] = useState('');
    const [response, setResponse] = useState<Message[]>([
        {
            id: "intro",
            text: "Bienvenue sur Chat & Go ton assistant conversationnel,j'ai pour mission de t'aider à trouver les services de ton choix en te mettant en relation avec les différents prestataires",
            sender: 'bot',
        }
    ]);

    // état qui pilote l'affichage de l'indicateur en train d'écrire
    const [isTyping, setIsTyping] = useState(false);

    // permet de scroller automatiquement en bas de la liste
    const flatListRef = useRef<FlatList>(null);

    useEffect(() => {
        flatListRef.current?.scrollToEnd({ animated: true });
    }, [response, isTyping]);

    const envoyer = async () => {
        if (!question.trim()) {
            Alert.alert('veuillez saisir une chaine de caractère');
            return;
        }

        const userMsg: Message = {
            id: Date.now().toString(),
            text: question,
            sender: 'user',
        };
        setResponse((prev) => [...prev, userMsg]);
        setQuestion('');
        setIsTyping(true);
        // await wait();

        const reponse = await CallAPI(question);
        setIsTyping(false);

        if (reponse) {
            const botMsg: Message = {
                id: (Date.now() + 1).toString(),
                text: reponse,
                sender: 'bot',
            };
            setResponse((prev) => [...prev, botMsg]);
        }
    };

  async function CallAPI(question:string) {
    const user_id=2;
    const url="http://127.0.0.1:8000/chat";
    try {
        const response = await fetch(url, {
            method: "POST",
            headers:{
              'Content-type':'application/json'
            },
            body: JSON.stringify(
              {
                user_id:user_id,
                saisie:question
              })
          });
            const data = await response.json();
            console.log(data);
            const reponse=data['reponse'];
            return reponse
            // let p = document.createElement('p');
            // p.innerHTML=data['reponse'] || "je n'est pas bien compris";
            // p.className='bot';
            // chatzone.appendChild(p);
      }catch (error) {
        console.error('Error est survenu:', error);
      }
  }
//     const [waitValue, setWaitValue] = useState("");
//     const wait = async () => {
//     setWaitValue("Recherche profonde...");
    
//     await new Promise(resolve => setTimeout(resolve, 2000));

//     setWaitValue("Organisons les données trouvées...");

//     await new Promise(resolve => setTimeout(resolve, 2000));

//     setWaitValue("Formulons la réponse...");
// };
    

    return (
        <KeyboardAvoidingView
            behavior='padding'
            style={styles.container}
        >
            <View style={{ flex: 1 }}>
                <View style={{ flex: 1, marginTop: hp(13), borderRadius: 60 }}>

                    <FlatList
                        ref={flatListRef}
                        data={response}
                        keyExtractor={item => item.id}
                        renderItem={({ item }) => (
                            <Animated.View
                                key={'uniqueKey'}
                                entering={FadeInDown.duration(400)}
                                style={[styles.messageContainer,
                                item.sender === 'user' ? styles.userBubble : styles.botBubble]}
                            >
                                <ParsedText
                                    parse={[
                                        {
                                            type: 'url',
                                            style: styles.url,
                                            onPress: handlUrlPress,
                                        },
                                        {
                                            type: 'phone',
                                            style: styles.phone,
                                            onPress: createThreeButtonAlert,
                                        },
                                        {
                                            type: 'email',
                                            style: styles.email,
                                            onPress: handlEmailPress,
                                        },
                                    ]}
                                    childrenProps={{
                                        allowFontScaling: false,
                                    }}
                                >
                                    {item.text}
                                </ParsedText>
                            </Animated.View>
                        )}
                        // ListFooterComponent={
                        //     isTyping ? (
                        //         <Animated.View
                        //             entering={FadeInDown.duration(300)}
                        //             style={[styles.messageContainer, styles.botBubble]}
                        //         >
                        //             <TypingIndicator
                        //                 dotColor="#666666"
                        //                 dotRadius={4}
                        //                 dotMargin={4}
                        //                 animationPreset="wave"
                        //             />
                        //             {/* <Text>{waitValue}</Text> */}
                        //         </Animated.View>
                        //     ) : null
                        // }
                    />
                </View>
            </View>
            <View style={styles.saisi}>
                <TextInput style={styles.input}
                    multiline={true}
                    numberOfLines={5}
                    placeholder='Comment puis-je vous aidez...'
                    placeholderTextColor={'grey'}
                    value={question}
                    onChangeText={setQuestion}
                />
                
                <Pressable style={({ pressed }) => {
                    return {
                        opacity: pressed ? 0.5 : 1
                    }
                }} onPress={envoyer}>

                    <FontAwesomeFreeSolid name="paper-plane" size={20} color={"black"}/>
                </Pressable> 
            </View>
        </KeyboardAvoidingView>
    )
}
export default Home

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor:"#FCF9F6",
        alignContent: 'center',
        justifyContent: 'flex-end',
    },
    saisi: {
        height: hp('45%'),
        backgroundColor: '#8b7263',
        alignItems: 'center',
        justifyContent: 'center',
        flexDirection: 'row',
        paddingBottom: hp('38%'),
        marginBottom: hp('-38%'),
    },
    img: {
        width: wp('100%'),
        height: hp('100%'),
        marginTop: 60,
        borderTopRightRadius: 60,
        borderTopLeftRadius: 60,
    },
    input: {
        height: hp('4%'),
        width: wp('85%'),
        margin: 'auto',
        borderWidth: 1,
        backgroundColor: 'white',
        borderRadius: 15,
        color: 'blacset',
        paddingLeft: 10,
        fontSize: 17,
    },
    messageContainer: {
        maxWidth: '80%',
        padding: 10,
        borderRadius: 10,
        marginVertical: 4,
    },
    messageText: {
        color: 'black',
    },
    userBubble: {
        alignSelf: 'flex-end',
        backgroundColor: '#25D366',
        marginRight: 10,
        borderBottomRightRadius:0,
    },
    botBubble: {
        alignSelf: 'flex-start',
        backgroundColor: '#E5E5EA',
        marginLeft: 10,
        borderBottomLeftRadius:0,
    },
    url: {
        color: '#1195b6',
        textDecorationLine: 'underline',
        fontStyle: 'italic',
    },
    phone: {
        color: 'green',
        textDecorationLine: 'underline',
        fontStyle: 'italic',
    },
    email: {
        color: '#666666',
        textDecorationLine: 'underline',
    }
})