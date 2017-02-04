#Nicholas White Assignment #2 Databases Class
#http://biostat.mc.vanderbilt.edu/wiki/pub/Main/DataSets/titanic.txt


import csv #For separating by comma but skipping the comma in the names
unwantedCols = ["row.names"] #List to easily add or take away columns 
toScrub = []
source = 'titanic.txt'
new_text=''
n=0
t=open("TitanicClean.txt",'w')
with open(source) as f:
    reader = csv.reader(f)
    for values in reader:
        new_text=''
        loop=0 #To fix error with the first survivor/passenger 1 (noted in the write up)
        for i in values:
            if i in unwantedCols:
                toScrub.append(values.index(i))
            if n==1 and loop>0:
                new_text+=i+"\t"
            if values.index(i) not in toScrub and n!=1:
                if i=='':
                    i="NA"     #Creating NA filler for blanks
                new_text+=i+"\t"
            loop+=1
        t.write(new_text+"\n")
        n+=1
        

t.close()
print(toScrub)
print("completed")
print(n,"lines written")
