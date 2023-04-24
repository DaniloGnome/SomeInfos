n1 = int(input('Um valor'))
n2 = int(input('outro valor'))
print('a soma vale {}'.format(n1+n2))
# estamos somando n1+n2 com a formatação sem precisar criar uma variavel com o resultado da soma de n1+n2


n1 = int(input('Um numero'))
n2 = int(input('outro numero'))
s = n1+n2 # soma
m = n1*n2 # multiplicação
d = n1/n2 # divisao real
di = n1//n2 # divisao inteira
e = n1**n2 # Exponenciação , n1 elevado a n2

print(f'a soma é {s} \no produto {m}\na divisão é {d:.3f}')
# usamos o f para formatar, e colocamos as variaveis dentro dos {}
# e o \n serve para quebrar a linha


print('a soma é {} ,o produto {} ,divisão é {:.3f},'.format(s,m,d), end=' ')
# {:.3f} significa que temos uma formatação de 3 casas de dicimais
# end='' nao quebra a linha
# e o \n serve para quebrar a linha


print('a divisão inteira é {} e a Exponenciação é {}'.format(di,e))

