import { NativeTabs } from 'expo-router/native-tabs';

export default function TabLayout() {
  return (
    <NativeTabs 
        tintColor="#954A00"
        backgroundColor="#ffffff"
    >


      <NativeTabs.Trigger name="index">
        <NativeTabs.Trigger.Label>Home</NativeTabs.Trigger.Label>
        <NativeTabs.Trigger.Icon
            sf={{ default:'house', selected:'house.fill'}}
            md="home"
        />
      </NativeTabs.Trigger>

      <NativeTabs.Trigger name="actualite">
        <NativeTabs.Trigger.Label>Actualité</NativeTabs.Trigger.Label>
            <NativeTabs.Trigger.Icon
            sf={{ default:'book', selected:'book.fill'}}
            md="book"
            />
      </NativeTabs.Trigger>

      <NativeTabs.Trigger name="etablissement">
        <NativeTabs.Trigger.Label>Etablissement</NativeTabs.Trigger.Label>
        <NativeTabs.Trigger.Icon
            sf={{default:'building.columns',selected:'building.columns.fill'}}
            md='build'
        />
      </NativeTabs.Trigger>

      <NativeTabs.Trigger name="business_et_service">
        <NativeTabs.Trigger.Label>Business & Service</NativeTabs.Trigger.Label>
        <NativeTabs.Trigger.Icon
            sf={{default:'storefront',selected:'storefront.fill'}}
            md='wallet'
        />
      </NativeTabs.Trigger>
      <NativeTabs.Trigger name="account">
        <NativeTabs.Trigger.Label>Compte</NativeTabs.Trigger.Label>
        <NativeTabs.Trigger.Icon
            sf={{default:'person.circle',selected:'person.circle.fill'}}
            md='person'
        />
      </NativeTabs.Trigger>



    </NativeTabs>
  );
}
