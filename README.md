# Hadoop_Basic_cloud_computing_Mini-Project
This project is a basic Uploading and Downloading files using Hadoop. This is a mini project assigned to us in our Final year of Cloud Computing. First we login page and after login we upload the file from our local device and then upload it to the hadoop console. 
Xampp server is used for the front and back end of the application
Installing hadoop is a basic requirement. Also see that there is no bug in that version of hadoop or the installation will fail... 
#How to install Hadoop

https://www.youtube.com/watch?v=GfixwKmS8Ro&t=1179s

#How to confirm hadoop is installed correctly
After creating the datanode and namenode folders in the hadoop data folder, run command prompt in windows and create a namenode in it. If the namenode is created successfulle, then check running dfs and yarn by using this command: start-dfs and start-yarn in two command prompts and if they stop at any point, then you're installation has failed.
In the php files, we have given a static file name to upload, you have to change the path of the file upload in it before running the project.

# Xampp server : 
we have also added a sql xampp server program to firstly check if the data is stored in the xampp server or not and then we have added a shell command to insert the file in the hadoop console.
there are two port numbers for accessing the hadoop console 9870 and 8000
