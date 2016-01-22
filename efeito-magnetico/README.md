# Efeito Magnético
Em programas vários programas gráficos baseados em vetores, uma ferramenta muito útil para auxiliar no desenho é o magneto. Resumidamente, uma pequena área da tela, ao redor de "pontos importantes" são magnéticos. Por exemplo, se movermos o cursor do mouse próximo o suficiente de um desses pontos e começarmos a desenhar, o desenho vai ser iniciado no ponto magnético ao invés do ponto onde o cursor se encontra. Porém, quando o cursor está distante de um desses pontos, o início do desenho é no próprio ponto.

Alguns exemplos:
* Se existe um ponto magnético na coordenada (50, 50) e o raio de efeito magnético é 5, quando o curso é movido para a posição (49,50), o efeito magnético atua e força com que o desenho seja feito a partir do ponto (50,50);
* Se existe um ponto magnético em (50, 50), o raio de efeito magnético é 5 e o cursor está em (0, 0), não ocorre o efeito magnético;
* Se existem dois pontos magnéticos em (50, 50) e (100, 50), quando o mouse está em (101, 48), o efeito magnético faz com que você comece a desenhar em (100, 50);
* Se os pontos magnéticos são (50, 50) e (51, 51) e o mouse está em (51, 52), o desenho se inicia em (51, 51)

Implemente este efeito magnético, informando a localização dos pontos magnéticos, o raio do efeito magnético e o ponto onde o cursor se encontra no momento. COm esses dados, seu programa deverá informar qual o ponto onde o desenho irá começar realmente.

# Uso

```bash
./efeito_magnetico.php <pontos> <raio> <cursor>
```

### Exemplo:

```bash
./efeito_magnetico.php 50:50,51:51 5 51:52
```