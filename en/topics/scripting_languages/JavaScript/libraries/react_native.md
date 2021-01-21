# React Native

Use a single JavaScript codebase that runs on Node and compiles to _native_ Android and iOS mobile apps, with great performance and native elements. And it also runs as a desktop web app.

Knowing some React first course will make React Native easier.

As an alternative, see the [Dart](/en/topics/scripting_languages/Dart) language (similar to JavaScript and created by Google), where the "Flutter" library is used to make native mobile apps.


## Resources

- [reactnative.dev](https://reactnative.dev) homepage
	> Learn once, write anywhere.
	> Create native apps for Android and iOS using React.
	>
	> Written in JavaScript - rendered with native code.
	>
	> React Native is like React, but it uses native components instead of web components as building blocks.
- [Getting Started](https://reactnative.dev/docs/getting-started)
    > This page will help you install and build your first React Native app.
	- Includes an interactive example.
- Tutorials
    - [Learn the basics](https://facebook.github.io/react-native/docs/tutorial).
- [GitHub repo](https://github.com/facebook/react-native)
- Online IDE
	- [expo.io](https://expo.io/)
		> With Expo tools, services, and React, you can build, deploy, and quickly iterate on native Android, iOS, and web apps from the same JavaScript codebase.
		- Create and run apps. Even run on your mobile device.
		- See in particular [snack.expo.io](https://snack.expo.io/)

### Hello world

- `App.js`
	```javascript
	import React, { Component } from 'react';
	import { Text, View } from 'react-native';

	export default class HelloWorldApp extends Component {
		render() {
			return (
			<View style={{ flex: 1, justifyContent: "center", alignItems: "center" }}>
				<Text>
					Hello, world!
				</Text>
			</View>
			);
		}
	}
	```

### Asset example

Copied from the https://snack.expo.io/ example app.

- `assets/snackIcon.png`
- `components/AssetExample.js`
	```javascript
	import * as React from 'react';
	import { Text, View, StyleSheet, Image } from 'react-native';

	export default function AssetExample() {
	  return (
		<View style={styles.container}>
		  <Text style={styles.paragraph}>
			Local files and assets can be imported by dragging and dropping them into the editor
		  </Text>
		  <Image style={styles.logo} source={require('../assets/snack-icon.png')} />
		</View>
	  );
	}

	const styles = StyleSheet.create({
	  container: {
		alignItems: 'center',
		justifyContent: 'center',
		padding: 24,
	  },
	  paragraph: {
		margin: 24,
		marginTop: 0,
		fontSize: 14,
		fontWeight: 'bold',
		textAlign: 'center',
	  },
	  logo: {
		height: 128,
		width: 128,
	  }
	});
	```
- `App.js`
	```javascript
	import * as React from 'react';
	import { Text, View, StyleSheet } from 'react-native';
	import Constants from 'expo-constants';

	// You can import from local files
	import AssetExample from './components/AssetExample';

	// or any pure javascript modules available in npm
	import { Card } from 'react-native-paper';

	export default function App() {
	  return (
		<View style={styles.container}>
		  <Text style={styles.paragraph}>
			Change code in the editor and watch it change on your phone! Save to get a shareable url.
		  </Text>
		  <Card>
			<AssetExample />
		  </Card>
		</View>
	  );
	}

	const styles = StyleSheet.create({
	  container: {
		flex: 1,
		justifyContent: 'center',
		paddingTop: Constants.statusBarHeight,
		backgroundColor: '#ecf0f1',
		padding: 8,
	  },
	  paragraph: {
		margin: 24,
		fontSize: 18,
		fontWeight: 'bold',
		textAlign: 'center',
	  },
	});
	```

### Package

Example `package.json`.

```json
{
  "dependencies": {
    "react-native-paper": "3.6.0"
  }
}
```
