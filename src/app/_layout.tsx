import { Stack } from 'expo-router';

export default function RootLayout() {
  return (
    <Stack>

      <Stack.Screen 
      name="(tabs)" 
      options={{ 
        headerShown: false 
      }} />

      <Stack.Screen 
      name='add'
      options={{
        // headerTitle:'',
        headerBackButtonDisplayMode:'minimal'
      }}
      />
      <Stack.Screen 
      name='connect'
      options={{
        // headerTitle:'',
        headerBackButtonDisplayMode:'minimal'
      }}
      />
      <Stack.Screen 
      name='inscription'
      options={{
        // headerTitle:'',
        headerBackButtonDisplayMode:'minimal'
      }}
      />

      <Stack.Screen 
      name='chat'
      options={{
        // headerTitle:'',
        headerBackButtonDisplayMode:'minimal'
      }}
      />

    </Stack>
  );
}
