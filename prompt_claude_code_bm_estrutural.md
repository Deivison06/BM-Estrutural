# PROMPT — REFORMULAÇÃO DO SITE BM ESTRUTURAL
> Enviar este prompt ao Claude Code junto com os arquivos: `index.html`, `style.css`, `app.js`, `Texto_dos_materiais.docx`, `dna_completo.docx`, `Aço_BM_Estrutura_01.pdf`, `FOLDER_-_BM_ESTRUTURAL_-_FOLDER_03.pdf`

---

## CONTEXTO DO PROJETO

A **BM Estrutural Soluções em Engenharia** é uma empresa com 25 anos de experiência, especializada em:
- Fabricação de **Lajes Treliçadas** (com cerâmica ou EPS), **Laje Painel Treliçado**, **Laje Fácil** e **Cortina de Contenção**
- Representante exclusivo **Morandin** para venda de **AÇO para construção civil** (vergalhões CA-50, fio CA-60, telas soldadas, arame, pregos, barras de transferência, e **AÇO cortado e dobrado**)
- Atua em todo o estado de São Paulo, com foco em **Jundiaí e Campinas**
- Sede: Estrada das Abelhas, 445 — Bairro Ponte Preta — Louveira — SP — CEP 13291-258
- Contato: (19) 3878-2233 | contato@estruturalse.com.br | @bmestrutural

**Posicionamento estratégico:** Transitar de "fabricante de lajes" para **"parceira estratégica de engenharia"**. Público-alvo: mestres de obra, construtores, arquitetos e engenheiros de obras verticais.

---

## ⚠️ REGRA ABSOLUTA — NOMENCLATURA

**NUNCA usar a palavra "ferro".** Sempre usar **"AÇO"**. Isso se aplica a todo o HTML, títulos, descrições, nav, footer, tickets, alt texts — sem exceção. A palavra "ferro" é proibida em qualquer contexto neste site.

---

## O QUE FAZER

### 1. REESTRUTURAR O SITE EM 3 ARQUIVOS PRINCIPAIS

Manter a estrutura de arquivos separados (`index.html`, `lajes.html`, `aco.html`), todos linkados pelo mesmo header/nav e compartilhando o mesmo `style.css` e `app.js`.

---

### 2. `index.html` — HOME REFORMULADA

**Objetivo:** Apresentar a empresa no geral, criar autoridade e direcionar para as páginas de produto.

**Estrutura da página:**

#### HEADER / NAV
- Logo BM Estrutural
- Links: `INÍCIO` | `LAJES` (→ lajes.html) | `AÇO` (→ aco.html) | `QUEM SOMOS` (âncora) | `OBRAS` (âncora) | `REGIÕES` (âncora) | `CONTATO` (âncora)
- Botão CTA: **"Solicitar Orçamento"** linkando para WhatsApp: `https://wa.me/551938782233`

#### BANNER / HERO
- Slider com 2 slides (manter o `app.js` atual de banner rolável com swipe/touch):
  - **Slide 1 — LAJES:** Headline: `LAJES TRELIÇADAS` / Sub: fabricação própria, 25 anos, Jundiaí e Campinas / CTA: "Ver Lajes →" → lajes.html
  - **Slide 2 — AÇO:** Headline: `AÇO PARA CONSTRUÇÃO CIVIL` / Sub: Representante exclusivo Morandin — vergalhões, telas, AÇO cortado e dobrado / CTA: "Ver Produtos de AÇO →" → aco.html
- **NÃO usar a palavra ferro em nenhum slide**

#### TICKER (faixa rolante)
Atualizar para: `LAJES TRELIÇADAS · PAINEL TRELIÇADO · LAJE FÁCIL · TELAS SOLDADAS · AÇO PARA CONSTRUÇÃO · AÇO CORTADO E DOBRADO · 25 ANOS DE EXPERIÊNCIA · REPRESENTANTE MORANDIN`

#### SEÇÃO: NOSSAS SOLUÇÕES (visão geral dos 2 ramos)
Dois grandes cards lado a lado, cada um com CTA para a página específica:
- **Card LAJES:** imagem de laje, título "Soluções em Lajes", sub breve, botão "Conhecer Lajes →"
- **Card AÇO:** imagem de vergalhões/telas, título "AÇO para Construção Civil", sub breve, botão "Conhecer AÇO →"

#### SEÇÃO: QUEM SOMOS (manter conteúdo atual, apenas atualizar texto)
Texto atualizado para incluir os dois ramos (lajes + AÇO Morandin). Manter os 4 stats (25 anos, valor justo, material ideal, atendimento diferenciado).

#### SEÇÃO: OBRAS (manter atual — 3 cards Inovar / Renovar / Evoluir)

#### SEÇÃO: REGIÕES ATENDIDAS (manter atual com mapa)

#### SEÇÃO: CONTATO (manter atual — formulário + informações)

#### FOOTER
Atualizar nav do footer para incluir links para `lajes.html` e `aco.html`. Remover qualquer referência a "ferro".

---

### 3. `lajes.html` — PÁGINA DE LAJES

**Objetivo:** Página dedicada exclusivamente aos produtos de laje, com foco técnico e comercial.

**Estrutura:**

#### HERO SECTION
- Headline grande: `LAJES TRELIÇADAS`
- Sub: "Fabricação própria. Qualidade certificada. Soluções para pequenos e grandes vãos."
- CTA: "Solicitar Orçamento" → WhatsApp

#### PRODUTOS DE LAJE (seções individuais, uma por produto)

**1. Laje Treliçada Unidirecional e Bidirecional**
- Descrição: sistema pré-fabricado com vigotas treliçadas de concreto armado e enchimento em EPS ou lajotas cerâmicas; distribui cargas em uma ou duas direções; indicada para obras de todos os portes
- Destaques com ícones: Agilidade na execução / Alto desempenho estrutural / Versátil (uni e bidirecional)
- CTA: "Quero um orçamento"

**2. Laje Painel Treliçado (Unidirecional e Bidirecional)**
- Descrição: armação treliçada + base em concreto, pode receber EPS; fôrma zero (dispensa compensados); acabamento liso na face inferior; painéis de 25cm ou 1,10m; pode ficar aparente
- Destaques com ícones: Sem forma de madeira / Acabamento uniforme / Encaixe perfeito entre painéis / Montagem rápida
- CTA: "Quero um orçamento"

**3. Laje Fácil (NOVIDADE)**
- Badge: `NOVIDADE`
- Descrição: vigotas mais leves, sistema de encaixe intuitivo, instalação ágil e segura sem equipamentos pesados; ideal para residencial e comercial em grandes vãos
- Destaques: Leve / Prática / Sem equipamentos pesados
- CTA: "Quero um orçamento"

**4. Cortina de Contenção — Painel Treliçado Duplo**
- Descrição: solução estrutural geotécnica para estabilização de taludes e contenção de solo; painel duplo como fôrma faceada pré-pronta; agilidade extrema na montagem; elimina fôrmas de madeira; alta resistência a empuxos; ideal para subsolos e garagens
- Destaques: Contenção rápida / Sem madeira / Alta resistência
- CTA: "Quero um orçamento"

#### SEÇÃO: TELAS SOLDADAS (complemento para lajes)
- Descrição: produzidas com aço CA-60 e soldagem elétrica automatizada; ideais para lajes, calçadas e estruturas; redução de fissuras; modelos EQ45, EQ61, EQ92, EQ138 (2,00×3,00m) e Q61 a Q283 (2,45×6,00m)
- Tabela com os modelos (importar dados dos PDFs)
- CTA: "Solicitar Telas Soldadas"

#### SEÇÃO: POR QUE ESCOLHER A BM ESTRUTURAL
Cards com: 25 anos de experiência / Engenheiros experientes / Qualidade certificada / Atendimento técnico diferenciado / Entrega em todo SP

#### CTA FINAL
Bloco escuro com headline: "Pronto para acelerar sua obra?" + botão WhatsApp grande

---

### 4. `aco.html` — PÁGINA DE AÇO

**Objetivo:** Página dedicada ao AÇO para construção civil — linha Morandin.

**IMPORTANTE:** Esta é a nova vertical da empresa. Tom mais técnico e industrial. **NUNCA usar a palavra "ferro"** — sempre "AÇO".

**Estrutura:**

#### HERO SECTION
- Badge: `REPRESENTANTE EXCLUSIVO MORANDIN`
- Headline grande: `AÇO PARA CONSTRUÇÃO CIVIL`
- Sub: "Vergalhões, telas soldadas e AÇO cortado e dobrado — entregues na sua obra com qualidade Morandin."
- CTA: "Solicitar Orçamento" → WhatsApp

#### SEÇÃO: VERGALHÃO E FIO DE AÇO
- Intro: barras de 12 metros com alta aderência ao concreto; certificadas e prontas para uso

**Vergalhão CA-50 (12M) — tabela completa:**
| Tipo | Bitola (mm) | Polegada |
|------|------------|---------|
| CA-50 | 6,3mm | 1/4" |
| CA-50 | 8,00mm | 5/16" |
| CA-50 | 10,0mm | 3/8" |
| CA-50 | 12,5mm | 1/2" |
| CA-50 | 16,0mm | 5/8" |
| CA-50 | 20,0mm | 3/4" |
| CA-50 | 25,0mm | 1" |
| CA-50 | 32,0mm | — |

**Fio CA-60 (12M) — tabela completa:**
| Tipo | Bitola |
|------|--------|
| CA-60 | ø 4,2mm |
| CA-60 | ø 5,0mm |
| CA-60 | ø 6,0mm |
| CA-60 | ø 7,0mm |
| CA-60 | ø 8,0mm |
| CA-60 | ø 9,5mm |

#### SEÇÃO: TELAS SOLDADAS (linha Morandin)
Intro: produzidas com tecnologia de ponta; ideais para lajes, calçadas e estruturas que exigem precisão e durabilidade; CA-60; redução de fissuras e agilidade na montagem

**Tela Soldada 2,00×3,00m:**
| Modelo | Malha (cm) | Bitola |
|--------|-----------|--------|
| EQ45 | 20x20 | ø 3,4mm |
| EQ61 | 15x15 | ø 3,4mm |
| EQ92 | 15x15 | ø 4,2mm |
| EQ 138 | 10x10 | ø 4,2mm |

**Tela Soldada 2,45×6,00m:**
| Modelo | Malha (cm) | Bitola |
|--------|-----------|--------|
| Q61 | 15x15 | ø 3,4mm |
| Q92 | 15x15 | ø 4,2mm |
| Q113 | 10x10 | ø 3,8mm |
| Q138 | 10x10 | ø 4,2mm |
| Q166 | 10x10 | ø 4,5mm |
| Q196 | 10x10 | ø 5,0mm |
| Q246 | 10x10 | ø 5,6mm |
| Q283 | 10x10 | ø 6,0mm |

#### SEÇÃO: OUTROS PRODUTOS
3 cards:
- **Arames:** Trançado ou Liso para amarração e cercamentos
- **Pregos:** De 1 cabeça e 2 cabeças de alta resistência
- **Barras de Transferência:** Para pisos industriais e pavimentos

#### SEÇÃO: AÇO CORTADO E DOBRADO (destaque especial)
Esta seção merece tratamento diferenciado — é o produto de maior valor agregado.

- Headline: `AÇO CORTADO E DOBRADO`
- Sub: "A solução definitiva para ganhar produtividade e eliminar desperdícios no seu canteiro de obras."
- 4 vantagens em cards/lista destacada:
  1. Armação cortada e dobrada: menos desperdício, mais economia na obra
  2. Do projeto direto para a obra: precisão que entrega resultado
  3. Mais rapidez na execução com qualidade garantida
  4. Receba sua armação pronta: é montar, amarrar e concretar
- Badge de destaque: "PRECISÃO E EFICIÊNCIA — Tecnologia Industrial Morandin"
- CTA forte: "Solicitar AÇO Cortado e Dobrado" → WhatsApp

#### SEÇÃO: POR QUE MORANDIN
- Representante exclusivo Morandin em toda região
- Material certificado e normatizado
- Entrega direta na obra
- Suporte técnico especializado

#### CTA FINAL
Bloco com headline: "Pronto para cotar seu AÇO?" + botão WhatsApp grande + telefone (19) 3878-2233

---

## REGRAS DE DESIGN E CÓDIGO

### Identidade Visual (manter rigorosamente)
- **Cores:** Azul escuro navy `#1a2744` (fundo principal), Amarelo ouro `#D9B400` (destaque/ação), Branco `#ffffff` (texto), Cinza concreto `#e8e4de` (fundos alternativos)
- **Tipografia:** Manter `Archivo` (títulos) + `IBM Plex Sans` (corpo) + `IBM Plex Mono` (índices/badges)
- **Estilo:** Industrial, técnico, autoridade. Sem ornamentos desnecessários. Ângulos retos, bordas finas douradas como detalhes

### Componentes CSS a reutilizar do `style.css` atual
- `.wrap` (container 1360px)
- `.btn-solid` e `.btn-ghost` (botões)
- `.reveal` + IntersectionObserver (scroll animations do `app.js`)
- `.site-header` com efeito `.scrolled`
- `.ticker` (faixa rolante)
- `.sec-head` com `.sec-title` e `.sec-idx`
- `.mnav` (mobile nav com burger)
- Sistema de `.on-navy` e `.on-concrete-2` para alternar fundos de seção

### Tabelas de produto
- Usar estilo dark com header dourado (como nos PDFs originais)
- Fundo: `rgba(255,255,255,0.04)`, header row: `rgba(217,180,0,0.15)`, texto header: `#D9B400`
- Bordas: `1px solid rgba(255,255,255,0.08)`

### Navegação entre páginas
- O `<header>` deve ser idêntico nos 3 arquivos
- O link ativo deve refletir a página atual (classe `.active` no nav)
- Em `lajes.html` e `aco.html`, os links `#quem-somos`, `#obras`, `#regioes`, `#contato` devem apontar para `index.html#quem-somos` etc.

### WhatsApp CTA
- Link padrão: `https://wa.me/551938782233`
- Mensagem sugerida para AÇO: `https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+A%C3%A7o+para+constru%C3%A7%C3%A3o`
- Mensagem sugerida para Lajes: `https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes`

### SEO básico
- `<title>` de cada página:
  - `index.html`: `BM Estrutural | Lajes e Aço para Construção Civil — Jundiaí e Campinas`
  - `lajes.html`: `Lajes Treliçadas | BM Estrutural — Louveira SP`
  - `aco.html`: `Aço para Construção Civil | BM Estrutural — Representante Morandin`
- `<meta name="description">` com conteúdo relevante em cada página

### Responsividade
- Mobile-first. Breakpoint principal: `768px`
- As tabelas de produto devem ter scroll horizontal no mobile (`overflow-x: auto`)
- Os dois cards "Nossas Soluções" na home devem empilhar no mobile

---

## REFERÊNCIAS VISUAIS DE CONCORRENTES (para inspiração de estrutura, não de código)

O cliente aprovou a estrutura simples e direta de:
- https://lajespaulista.com.br — home limpa com foco nos produtos
- https://www.lajesamerica.com.br — separação clara entre ramos de produto
- https://lajesmix.com.br — navegação objetiva
- https://www.lajesconceicao.com.br — apresentação dos produtos por categoria
- https://morandinferroeaco.com.br — referência do fabricante representado

**Adaptação:** a BM Estrutural tem identidade visual própria mais forte (navy + gold + industrial). Usar essas referências apenas para estrutura de informação e fluxo de navegação.

---

## RESUMO DO QUE CRIAR / MODIFICAR

| Arquivo | Ação |
|---------|------|
| `index.html` | Reformular: atualizar nav, banner, ticker, adicionar seção "Nossas Soluções", atualizar Quem Somos, manter Obras/Regiões/Contato/Footer |
| `lajes.html` | **CRIAR**: página completa de lajes com todos os produtos |
| `aco.html` | **CRIAR**: página completa de AÇO com todos os produtos e tabelas |
| `style.css` | Expandir com estilos para tabelas, badges, novos layouts de produto |
| `app.js` | Manter lógica atual; adicionar suporte para active nav entre páginas |

---

## ATENÇÃO FINAL

1. **NUNCA escrever "ferro"** em nenhum lugar do código — nem em comentários, alt texts, classes CSS ou textos visíveis
2. As tabelas de vergalhão e telas soldadas devem ser **completas e fiéis** aos dados dos PDFs acima
3. O AÇO Cortado e Dobrado deve ter **destaque visual especial** — é o produto de maior valor
4. Manter o `app.js` atual funcionando (banner, scroll spy, mobile nav, reveal)
5. Os 3 arquivos devem compartilhar o mesmo `style.css` — não criar arquivos CSS separados
