def linearSearchExists(haystack,needle):
    for i in range(int(len(haystack))):
        if haystack[i] == needle:
            return True
    return False

def listIntersection(targetList,searchList):
    results = []
    for i in range(int(len(searchList))):
        if linearSearchExists(targetList,searchList[i]):
            results.append(searchList[i])
    return results

print((listIntersection([1,2,3,4,5,6],[1,4,4,5,8,9,10,11])))
print(listIntersection([3,4,5,10,2,20,4,5],[4,20,22,2,2,2,10,1,4]))
print(listIntersection([2,3,4,54,10,5,9,11],[3,10,23,10,0,5,9,2]))