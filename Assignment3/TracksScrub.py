# Nicholas White Assignment 3
# 10/15/2016 Scrubbing the Million Song Subset File
# URL: http://labrosa.ee.columbia.edu/millionsong/pages/getting-dataset#subset

def file_conversion():
    print("Creating a clean data file from the Million Song Dataset.")
    source = 'tracks.txt'
    target = 'tracks_clean.txt'
    try: 
        s = open(source,'r')
    except:
        print("File missing or cannot be read.")
    else:
        n = 0
        print("Data processing ...")
        t = open(target,'w')
        t.write("Year"+"\t"+"Track ID"+"\t"+"Artist"+"\t"+"Song Title"+"\n")
        for line in s:        
            text = line[:-1]
            new_text = text.replace("<SEP>",",")
            values = new_text.split(",")
            finished_text= ""
            for i in range(len(values)):
                if values[i] == '':
                    finished_text += 'N/A' + "\t"
                else:
                    finished_text += values[i] + "\t"
            t.write(finished_text+"\n")
            n +=1
        s.close()
        t.close()
        print("Conversion complete.")
        print(n,"lines written.")
file_conversion()
                                      
