import React, { useState } from "react";

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
			<p>
				Name:{" "}
				{editMode ? (
					<input
						type="text"
						value={editedName}
						onChange={handleNameChange}
					/>
				) : (
					userDetails.name
				)}
			</p>
			<p>Email: {userDetails.email}</p>
			{editMode ? (
				<button onClick={handleUpdateDetails}>Update</button>
			) : (
				<button onClick={handleEditToggle}>Edit</button>
			)}
		</div>
	);
};

export default UserDetails;
