#!/bin/bash

sshfs -o password_stdin username@host:/ /yourlocalpath <<< "password"

