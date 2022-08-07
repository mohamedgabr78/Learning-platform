#!/bin/bash -u
umask 022
# Mohamed Gabr 041057619 gabr0062@algonquinlive.com

./shapes.sh l 20 '#'

    echo "Hello" whoami
    echo "Welcome to the System Administration menu"

./shapes.sh l 20 '#'

    echo " enter administrator password"
    sudo

./shapes.sh l 20 '#'

  echo "Enter your choice:"
  echo "(P)rint out a list of users"
  echo "(L)ist the user groups"
  echo "(A)dd a new user"
  echo "(C)reate a welcome file for a user"
  echo "(Q)uit the menu"

  read user_choose.

while(user_choose)
do

{
    if [ $user_choose == "p" ] then

        allUsers=$(sudo cat /etc/passwd | fgreb 100 )
        numOfUsers=$(($allUsers | wc-l ))
        currentUser=($numOfUsers-1)
        myUser=$(($allUsers || awk -F : '{print $1,$4}'))
        echo $myUser

    elif [ $user_choose == "l" ] then
        groups

    elif [ $user_choose == "a" ] then
        useradd

    elif [ $user_choose == "c" ] then
        touch welcome.txt

    elif [ $user_choose == "q" ] then
        exit
    else && "invalid opttion"
    fi
  }
done

