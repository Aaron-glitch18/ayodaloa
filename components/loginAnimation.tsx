import LottieView from 'lottie-react-native';

export default function LoginAnimation() {
  return (
    <LottieView
      source={require('../assets/animations/login.json')}
      autoPlay
      loop
      style={{ width: 280, height: 280 }}
    />
  );
}