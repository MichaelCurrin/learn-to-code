#!python3
"""
List iteration challenge.

Demonstrate ways to iterate over a list without using a for loop.

Based on:
    https://github.com/tahmidefaz/recurse-everything/blob/master/list-iterate.py
"""


def list_rec(v, index=0):
    """
    Iterate over a list using recursion.

    Prints values as it goes but returns nothing.
    """
    try:
        item = v[index]
    except IndexError:
        pass
    else:
        print(item)
        list_rec(v, index + 1)


def list_rec_gen(v, index=0):
    """
    Iterate over a list using a recursive generator.

    https://stackoverflow.com/questions/38254304/can-generators-be-recursive
    """
    try:
        item = v[index]
    except IndexError:
        pass
    else:
        yield item
        yield from list_rec_gen(v, index + 1)


def list_while(v):
    """
    Iterate over a list using a while loop.
    """
    index = 0
    while True:
        try:
            item = v[index]
        except IndexError:
            break
        else:
            yield item
            index += 1


def main():
    x = range(20, 30)

    print('list_rec')
    list_rec(x)
    print()

    print('list_rec_gen')
    print(list(list_rec_gen(x)))
    print()

    print('list_while')
    print(list(list_while(x)))


if __name__ == '__main__':
    main()
