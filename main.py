from tika import parser


raw = parser.from_file('ex.pdf')
if raw:
    raw_content = raw['content']
    dicti = raw_content.strip()
    dicti = dicti.split()
print("Key value")


shift = 3

print(dicti[shift])
f = open("guru99.txt", "a+")
f.write(dicti[shift])

