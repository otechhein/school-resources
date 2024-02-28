import React, { useState } from "react";
import { View, StyleSheet, Pressable, Text, StatusBar } from "react-native";
const FlexDirectionBasics = () => {
	const [flexDirection, setflexDirection] = useState("row");
	const pressHandler = (val) => {
		setflexDirection(val);
	};
	return (
		<View style={styles.container}>
			<Text style={styles.label}>flexDirection</Text>
			<View style={styles.row}>
				<Pressable
					style={[
						styles.button,
						flexDirection === "row" && styles.selected,
					]}
					onPress={() => pressHandler("row")}
				>
					<Text>row</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						flexDirection === "row-reverse" && styles.selected,
					]}
					onPress={() => pressHandler("row-reverse")}
				>
					<Text>row-reverse</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						flexDirection === "column" && styles.selected,
					]}
					onPress={() => pressHandler("column")}
				>
					<Text>column</Text>
				</Pressable>
				<Pressable
					style={[
						styles.button,
						flexDirection === "column-reverse" && styles.selected,
					]}
					onPress={() => pressHandler("column-reverse")}
				>
					<Text>column-reverse</Text>
				</Pressable>
			</View>
			<View style={[styles.layout, { flexDirection: flexDirection }]}>
				<View style={[styles.box, { backgroundColor: "red" }]}>
					<Text style={styles.text}>1</Text>
				</View>
				<View style={[styles.box, { backgroundColor: "green" }]}>
					<Text style={styles.text}>2</Text>
				</View>
				<View style={[styles.box, { backgroundColor: "blue" }]}>
					<Text style={styles.text}>3</Text>
				</View>
			</View>
		</View>
	);
};
const styles = StyleSheet.create({
	container: {
		padding: 15,
		marginTop: 50,
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
		backgroundColor: "#eeeee",
		flex: 1,
		marginTop: 50,
	},
	box: {
		width: 100,
		height: 100,
		justifyContent: "center",
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
