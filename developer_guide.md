# Developer Guide
In this little tutorial it is explained how to create an issue and later, how to create a pull request.

## Issue:
First of all, you have to know that all the pull requests go associated to an issue. That means you **must not** upload a pull request without his previous issue.
To create an issue, you have to clink on ``new issue`` button of the official repository (not your fork).

 ![Imagen](https://github.com/RoboTech-URJC/RobotechServer-Project/blob/master/docs/developer_guide.png)

## Pull Request:
Once you have the official repository forked, you have to go to your fork and copy his url. Later, in a terminal of your PC, you type ``git clone [url]``, where "url" is the url copied.
This operation will do that all the archives of the forked repository download in your PC.

Now, if you type ``git branch`` you will see you are in *master* branch. In this branch you **must not** work. All changes you are going to do, you must to do them in a new branch. Usually one different branch is created for each issue you are going to resolve.

### ¿How to create a new branch?
* ``git checkout -b new_branch``

If you want to change the branch, you can type ``git checkout branch_name``, whre *branch_name* is the name of the branch.

If you type ``git branch`` again, you will see that you are now in the new branch yo have just created. That means that now you can perform as changes as you want.

<br>

When you have finished, you will can see the changes typing ``git status``. With this command you will se what files have been changed. That is the moment of create the pull request. You have to follow this steps:

* First, you have to prepare all files or directories that you are changed to be able to be uploaded later. You can do this using the command ``git add file_or_directory_name``

For example, imagine that *git status* return this:
```
$ git status
developer_guide.md
docs/
```
*developer_guide* is a file, and *docs/* is a directory. In this case, we would type the following command:
```
git add developer_guide docs/
```
* Now, if you type ``git status`` this files will be shown in green colour. That means these file have just been prepared to be upload. At this time, we have to create a *commit*. We will do it of the following way:

```
git commit -m 'text'
```
where *text* is the text wil appear in the tittle of the pull request. This tittle has to be idenfifying.

* To conclude, you have to type:

```
git push origin new_issue
```
where *new_issue* is the branch where you are working and you sould have created previously.

But, you have already to do one thing yo upload to create the pull request. If go to your forked repsitory, you will see a message like this:

![Imagen](https://github.com/RoboTech-URJC/RobotechServer-Project/blob/master/docs/developer_guide2.png)

 You have yo click in the **Compare & pull request** button. Then you will be able to write a more detailed comment about your pull request if you believe that it is needed. Then you click on **Create pull request** button.

 If you have followed all this steps, you will have created a pull request correctly.
