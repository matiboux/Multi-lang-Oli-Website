# Multi-Language-Website

This is an example, or a template, for a multi-language website using Oli.
This has been created as an alternative solution, after the work-in-progress translation-related functions were removed from Oli Beta 2.0, in its development.

This method uses the `Accept-Language` HTTP header to redirect the user to the proper version of the website.

## How does it work?

Typical content for a basic website
```
content/theme/
├ index.php
├ de/
│ └ index.php
├ en/
│ └ index.php
└ fr/
  └ index.php
```

The first *index.php* page is fetched when the user is on the website home page (e.g. http://example.com/).
This page reads the `Accept-Language` HTTP header to redirect the user to one of the available folder, depending on the user prefered langauages.
If no suitable language is found, the user will be redirected to a default language, specified in the website config.

### Example

The user open the website on the website home page (e.g. http://example.com/), and his HTTP header is: `Accept-Language: fr-FR, fr;q=0.9, en;q=0.8, de;q=0.7, *;q=0.5`.  
- The "fr-CH" language cannot be found as the **content/theme/fr-CH/** folder does not exist
- The next most suitable language is "fr", and the **content/theme/fr/** folder exists. The user will be redirected to display the *index.php* page of this folder (e.g. http://example.com/fr/)

If the **fr/** folder didn't exist, the script would have searched for the next accepted language.  
*Note: Searching for the language "\*" will directly cause the script to redirect the user to the default language defined in the website config.*

Once the user is on http://example.com/fr/, no more redirection is required and the user can freely visit the french version of the website.
Nothing prevent the user from switching to the english website by editing the URL to http://example.com/en/. If the user tries to access a folder that does not exist, the framework will display an error HTTP 404.

---

## License

MIT License.
Copyright 2018 Matiboux.

## About me

Matiboux, [on Github](https://github.com/matiboux/) or [on my website](https://matiboux.com/).
