import React, { useState } from "react";
import { View, StyleSheet, Pressable, Text, StatusBar } from "react-native";
const FlexDirectionBasics = () => {
	const [justifyContent, setJustifyContent] = useState("flex-start");
	const pressHandler = (val) => {
		setJustifyContent(val);
	};
	return (
		<View style={styles.container}>
			<Text style={styles.label}>justifyContent</Text>
			<View style={styles.row}>
				<Pressable
					style={[
						styles.button,
						justifyContent === "flex-start" && styles.selected,
					]}
					onPress={() => pressHandler("flex-start")}
				>
					<Text>flex-start</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						justifyContent === "flex-end" && styles.selected,
					]}
					onPress={() => pressHandler("flex-end")}
				>
					<Text>flex-end</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						justifyContent === "center" && styles.selected,
					]}
					onPress={() => pressHandler("center")}
				>
					<Text>center</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						justifyContent === "space-between" && styles.selected,
					]}
					onPress={() => pressHandler("space-between")}
				>
					<Text>space-between</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						justifyContent === "space-around" && styles.selected,
					]}
					onPress={() => pressHandler("space-around")}
				>
					<Text>space-around</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						justifyContent === "space-evenly" && styles.selected,
					]}
					onPress={() => pressHandler("space-evenly")}
				>
					<Text>space-evenly</Text>
				</Pressable>
			</View>
			<View style={[styles.layout, { justifyContent: justifyContent }]}>
				<View style={styles.box1} />
				<View style={styles.box2} />
				<View style={styles.box3} />
			</View>
		</View>
	);
};
const styles = StyleSheet.create({
	container: {
		padding: 15,
		marginTop: 20,
		flex: 1,
	},
	row: {
		flexDirection: "row",
		flexWrap: "wrap",
		marginTop: 10,
	},
	label: {
		textAlign: "center",
		marginBottom: 10,
		fontSize: 24,
	},
	button: {
		paddingHorizontal: 8,
		paddingVertical: 6,
		borderRadius: 4,
		backgroundColor: "oldlace",
		alignSelf: "flex-start",
		marginHorizontal: "1%",
		marginBottom: 6,
		minWidth: "48%",
		textAlign: "center",
		borderColor: "black",
	},
	layout: {
		marginTop: 20,
		flex: 1,
		flexDirection: "column",
		justifyContent: "flex-start",
	},
	box1: {
		width: 100,
		height: 100,
		backgroundColor: "red",
	},
	box2: {
		width: 100,
		height: 100,
		backgroundColor: "green",
	},
	box3: {
		width: 100,
		height: 100,
		backgroundColor: "blue",
	},

	text: {
		fontSize: 24,
		textAlign: "center",
	},
	selected: {
		backgroundColor: "coral",
		borderWidth: 0,
	},
});
export default FlexDirectionBasics;
