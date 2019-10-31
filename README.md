# msbat-test

### Recupere la liste des users Method [GET]

## URL  [api/users]

 Request (application/json)

    + Headers

            Accept:  application/json  
     
    + Response 200 (application/json)
    
     [{"id":7,"name":"operator","first_name":"qqsdq","actif":0,"email":"email@faycal2.comccffss","created_at":"2019-10-31 11:39:39","updated_at":"2019-10-31 11:39:39"} ]
        
    
            
### Creé un users Method [POST]

## URL  [api/users]

 Request (application/json)

    + Headers

            Accept:        application/json
            
    + Body

            name: 'example',
            first_name: 'example',
            email:'example@example.com',
            groupe_id:'example'
            
            
### Editer un user Method [PUT/PATCH]

## URL  [api/users/{user_id}]

 Request (application/json)

    + Headers

            Accept:        application/json
            
    + Body

            name: 'example',
            first_name: 'example',
            email:'example@example.com',


### Check si un user est actif  Method [GET]

## URL  [api/users/{user_id}/actif]

 Request (application/json)

    + Headers

            Accept:        application/json
            
    
            
            
### Recupere la liste des Groupe Method [GET]

## URL  [api/groupes]

 Request (application/json)

    + Headers

            Accept:  application/json  
     
    + Response 200 (application/json)
    
     [{"id":8,"name":"operator"]
        
    
            
### Creé un groupe Method [POST]

## URL  [api/groupes]

 Request (application/json)

    + Headers

            Accept:        application/json
            
    + Body

            name: 'example'
            
            
### Editer un groupe Method [PUT/PATCH]

## URL  [api/groupes/{groupe_id}]

 Request (application/json)

    + Headers

            Accept:        application/json
            
    + Body

            name: 'example'
