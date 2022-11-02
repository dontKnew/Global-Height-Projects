
	
	:: Navigate to the directory you wish to push to GitHub
	::Change <path> as needed
	cd C:\xampp\htdocs\start\globalHeight\project
	
	
	::Add all files in the directory
	git add .
	
	::Commit all changes with the message "auto push". 
	::Change as needed.
	git commit -m "auto pushed global height all project"

	::Push all changes to GitHub 
	git push origin master
	
	::Alert user to script completion
	Pushed successfully
	
	::Wait 10 seconds and exit the command 
	::Change as needed.
	TIMEOUT 10
	EXIT

