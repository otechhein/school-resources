const data = [   
    {
    "Book":[
       
        
        {"Title":"Lord of the rings", "Author":"J.R.R Tolkien","Famous Book":"LOTR, Hobbit, Silmarillion","First Book":1937  },
        {"Title":"Harry Potter", "Author":"J.K. Rowling","Famous Book":"The Philosopher's Stone, The prisoner of Azkaban, The Half-Blood Prince","First Book":1997}
        ],  
    "Movie":[
            
        
            {"MovieTitle":"Resident Evil", "Director":"Paul W.S.Andreson","First Movie":2002  },
            {"MovieTitle":"Silent Hill","Director":"Christophe Gans","First Movie":2006}
            ],  
    } 
    
    
];
var  count = data.length;
for(let i=0; i < count; i++)
{   
    for(let j=0; j < count ; j++)
    {      
           
        for(let k=0; k <data[i].Book.length; k++)
        {

            console.log("Book"+[k + 1] +":" + data[i].Book[k].Title);
        }

        for(let g=0; g <data[i].Book.length; g++)
        {
            console.log("Movie"+[g +1 ]+":" + data[i].Movie[g].MovieTitle);
        }
    } 
}