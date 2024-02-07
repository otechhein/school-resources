import React, { useState } from "react";
import UserDetails from "./UserDetails";

const UserProfile = () => {
	console.log(".....render UserProfile.......");

	// State in the parent component
	const [userDetails, setUserDetails] = useState({
		name: "John Doe",
		email: "john@example.com",
	});

	// Event handler function to update user details
	const updateUserDetails = (newDetails) => {
		setUserDetails((prevDetails) => ({ ...prevDetails, ...newDetails }));
	};

	return (
		<div>
			<h1>User Profile</h1>
			{/* Pass state and event handler to the child component */}
			<UserDetails
				userDetails={userDetails}
				onUpdateUserDetails={updateUserDetails}
			/>
			{/* Additional content can be added here */}
		</div>
	);
};

export default UserProfile;
