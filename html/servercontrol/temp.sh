#!/bin/bash
echo "Temp.CPU => $((cpu/1000))'Cº"
echo "Temp.GPU => $(/opt/vc/bin/vcgencmd measure_temp)"
