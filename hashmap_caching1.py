def existsWithinList(listL,dataY):
    hash_map = {}
    for i in range(int(len(listL))):
        hash_map[listL[i]] = listL[i]
    return False if hash_map.get(dataY) is None else True

sampleList = [3,10,23,3,4,50,2,3,4,18,6,1,-2]
print(existsWithinList(sampleList,23))
print(existsWithinList(sampleList,-2))
print(existsWithinList(sampleList,100))