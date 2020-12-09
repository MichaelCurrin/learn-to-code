# React Native

## Links

- [Sito ufficiale](https://facebook.github.io/react-native/).
    > Crea app native per Android e iOS usando React.
     > Scritto in JavaScript - reso con codice nativo.
     > React Native è come React, ma utilizza componenti nativi anziché componenti Web come blocchi predefiniti.
- [Introduzione](https://facebook.github.io/react-native/docs/getting-started)
    > Questa pagina ti aiuterà a installare e creare la tua prima app React Native.
- Tutorials
    - [Impara le basi](https://facebook.github.io/react-native/docs/tutorial).
- [GitHub repo](https://github.com/facebook/react-native)

## Hello world

```javascript
import React, { Component } from 'react';
import { Text, View } from 'react-native';

export default class HelloWorldApp extends Component {
    render() {
        return (
        <View style={{ flex: 1, justifyContent: "center", alignItems: "center" }}>
            <Text>Hello, world!</Text>
        </View>
        );
    }
}
```
