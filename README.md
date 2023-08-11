# Project description

The project has got three main blocks:
* API
* Barcode Reader
* Website

----------------

## Public schema

The public is going to be:
```
/ (For website)              ----> ZLL
/barcode (For barcode app)   ----> Tostada
/api (For API port)          ----> Sankey
```

## Private schema

The project going to work under MVC model

```
Model (DDBB Connection and query execution Part)
Controller (Logistic and Function Part)
View (Front-end)
    |---- API
    |---- Resource (img, css, js, scss)
    |---- Barcode
    |---- Web
    |---- index.php (Main controller route) 
```


## Branches

Every member work in their own branch

```
front ----> Tostada
web   ----> ZLL
api   ----> Sankey
```


## Installation

Use `git clone https://github.com/ZhengLinLei/barcode-service.git` into your Apache `htdocs` folder. Then switch to your branch and work inside.

```bash
git checkout <branch name>

# git checkout front (For tostada)
# git checkout api (For sankey)
# git checkout web (For ZLL)

# ----

# Make your changes, start coding and then save it
git add *
git commit -m <message>
# Example: git commit -m "Change code & updated Model"

# Now push to the remote server
git push origin <branch name>
# Please push the correct branch, otherwise the master can be corrupted
```