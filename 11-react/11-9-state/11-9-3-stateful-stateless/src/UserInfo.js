const UserInfo = ({ editMode, editedName, handleNameChange, userDetails }) => {
	return (
		<div>
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
		</div>
	);
};

export default UserInfo;
