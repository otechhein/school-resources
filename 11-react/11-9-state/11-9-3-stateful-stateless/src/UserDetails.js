import React, { useState } from "react";
import UserInfo from "./UserInfo";

const UserDetails = ({ userDetails, onUpdateUserDetails }) => {
	// props = { userDetails, onUpdateUserDetails }

	// Local state for the child component
	const [editMode, setEditMode] = useState(false);
	const [editedName, setEditedName] = useState(userDetails.name);

	const handleEditToggle = () => {
		setEditMode(!editMode);
	};

	const handleNameChange = (e) => {
		setEditedName(e.target.value);
	};

	const handleUpdateDetails = () => {
		onUpdateUserDetails({ name: editedName });
		setEditMode(false);
	};

	return (
		<div>
			<h2>User Details</h2>
			<UserInfo
				handleNameChange={handleNameChange}
				editMode={editMode}
				editedName={editedName}
				userDetails={userDetails}
			/>
			{editMode ? (
				<button onClick={handleUpdateDetails}>Update</button>
			) : (
				<button onClick={handleEditToggle}>Edit</button>
			)}
		</div>
	);
};

export default UserDetails;
