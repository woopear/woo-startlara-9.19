# Component btn  

- btn généralise `index.blade.php`  
```php
<x-btn
    classdiv="" // class div around all component
    classbtn="" // class of btn  
    // add all attribute ex : type="button"
>
// the button text 
</x-btn>
```  

- btn logout `index.logout.blade.php`  
```php
<x-btn.logout
    classdiv="" // class div around all component default 'w-fit'
/>
```  

- btn mode dark `mode-dark.blade.php`  
```php
<x-btn.mode-dark
    type="" // default 'icon', value choice => "icon" , "switch" , "text"  
    justify="" // place right, center, left, with justify from tailwind  
/>
// there are other properties to configure  
// the button according to the type chosen,  
// look at the component in detail to find out more
```