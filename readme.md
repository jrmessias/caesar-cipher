# Caesar Cipher: Encode and decode script

> Em criptografia, a Cifra de César, também conhecida como cifra de troca, código de César ou troca de César, é uma das mais simples e conhecidas técnicas de criptografia. É um tipo de cifra de substituição na qual cada letra do texto é substituída por outra, que se apresenta no alfabeto abaixo dela um número fixo de vezes. Por exemplo, com uma troca de três posições, A seria substituído por D, B se tornaria E, e assim por diante. O nome do método é em homenagem a Júlio César, que o usou para se comunicar com os seus generais. [Wikipédia - Cifra de César](https://pt.wikipedia.org/wiki/Cifra_de_C%C3%A9sar)

## Execução

Altere as variáveis, `$phrase` e `$size` no arquivo index.php.

A variável `$phrase` é a frase/palavra criptografadao.

A variável `$size` é o tamanho de casas para criptografar/descriptografar.

No console execute o camando `php index.php`.

## Retorno
```
Size: 3
Original Phrase: D OLJHLUD UDSRVD PDUURP VDOWRX VREUH R FDFKRUUR FDQVDGR
SHA1 Phrase: d283a6fe460f11ed269f87a3df391ad6e4d125f5
Decrypted: a ligeira raposa marrom saltou sobre o cachorro cansado
SHA1 Dencrypted: b5395144deedf4a152cf3180b7deaa5ba0d468bd
Encrypted: d oljhlud udsrvd pduurp vdowrx vreuh r fdfkruur fdqvdgr
SHA1 Encrypted: 85e3ae754f562aa765758f36f93ee3cd7866f3c4
```

1ª linha: quantidade de casas para codificação/decodificação.

2ª linha: frase/palavra original de entrada.

3ª linha: hash SHA1 da frase/palavra original de entrada.

4ª linha: frase/palavra decifrada.

5ª linha: hash SHA1 da frase/palavra decifrada.

6ª linha: frase/palavra codificada a partir da frase/palavra decifrada.

7ª linha: hash SHA1 da frase codificada a partir da frase/palavra decifrada.
