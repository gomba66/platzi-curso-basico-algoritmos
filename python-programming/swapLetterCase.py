

def swap_text(s):
    result = ""
    for letter in s:
        if letter.isupper():
            result += letter.lower()
        else:
            result += letter.upper()
    return result
print(swap_text("hola a TODOS"))