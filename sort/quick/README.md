## 伪代码
```
quicksort(A, p, r)
    if p < r
        q = partition(A, p, r)
        quicksort(A, p, q - 1)
        quicksort(A, q + 1, r)


partition(A, p, r)
    x = A[r]
    i = p - 1
    for j = p to r -1
        if A[j] <= x
            i = i + 1
            exchange A[i] with A[j]
    exchange A[i + 1] with A[r]
    return i + 1
```
