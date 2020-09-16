## 选择排序算法
通过从未排序的部分中反复找到最小的元素（考虑升序）并将其放在开头来对一个数组进行排序。该算法在一个给定数组中维护两个子数组

## 伪代码
```
selectsort(A)
    for i = 0 to n - 1
        min = i
        for j = i + 1 to n
            if A[j] < A[min]
                min = j
        exchange A[i] with A[min]
```
