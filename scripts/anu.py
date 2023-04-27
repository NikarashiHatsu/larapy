import sys

value = 0

for i in range(1, len(sys.argv)):
    value += int(sys.argv[i])

print(value)
