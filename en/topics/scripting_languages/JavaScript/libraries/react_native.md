# React Native

Use a single JavaScript codebase that runs on Node and compiles to _native_ Android and iOS mobile apps, with great performance and native elements. And it also runs as a desktop web app.

Knowing some React first course will make React Native easier.

As an alternative, see the [Dart](/en/topics/scripting_languages/Dart/) language (similar to JavaScript and created by Google), where the "Flutter" library is used to make native mobile apps.


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


## Setup a project app

Repo: [expo/create-react-native-app](https://github.com/expo/create-react-native-app)

### Create

Create a new app.

```sh
$ npx create-react-native-app
```

Run that in a directory like `repos`. When running the command, you will be prompted for an app name and it will create in a subdirectory for you.

### Options

If you don't supply a template, you'll be prompted to use the default setup or a template.

Or you can run with a known template.

```sh
$ npx create-react-native-app -t with-typescript
```

The default is to use `yarn`. You can also supply a flag for NPM as `--use-npm`.

See more templates here: [expo/examples](https://github.com/expo/examples) repo.

> Example projects that demonstrate how to use Expo APIs and integrate Expo with other popular tools

### Use

The project will have dependencies installed already.

You'll be give instructions in the CLI to run one of these commands. Notes are as copied from the docs.

> - `yarn ios` -- (`react-native run-ios`) Build the iOS App (requires a MacOS computer).
> - `yarn android` -- (`react-native run-android`) Build the Android App.
> - `yarn web` -- (`expo start:web`) Run the website in your browser.

For the last command - note that you'll be give a prompt.

```
This command requires Expo CLI.
Do you want to install it globally [Y/n]? n
error Command failed with exit code 1.
```

So you'll want to either install it globally using `Y` or manual install. Or maybe install `expo` in dev dependencies.

Note using `npx expo start:web` didn't do anything.


## Samples

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


## Frameworks

- [React Native Paper](https://callstack.github.io/react-native-paper/) homepage
    > Cross-platform Material Design for React Native.
- Repo: [callstack/react-native-paper](https://github.com/callstack/react-native-paper)
