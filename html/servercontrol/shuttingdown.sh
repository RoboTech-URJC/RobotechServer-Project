#!/bin/bash
from gpiozero import button
import time
import os

shutdownButton = Button(26)
rebootButton = Button(24)

while True: #infinite loop
     if shutdownButton.is_pressed:
        time.sleep(1)
        if shutdownButton.is_pressed:
            os.system("shutdown now -h")
    if rebootButton.is_pressed:
       time.sleep(1)
       if rebootButton.is_pressed:
           os.system("reboot")
    time.sleep(1)
