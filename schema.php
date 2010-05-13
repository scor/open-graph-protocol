<?php
    if(!stripos($_SERVER['HTTP_ACCEPT'], 'rdf+xml')) {
        header("Location: http://opengraphprotocol.org/", false, "302");
        exit;
    } else {
        header("Content-Type: application/rdf+xml");
   }
?>
<rdf:RDF 
 xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" 
 xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" 
 xmlns:owl="http://www.w3.org/2002/07/owl#" 
 xmlns:og="http://opengraphprotocol.org/schema/"
 xmlns:foaf="http://xmlns.com/foaf/0.1/"
 xmlns:dc="http://purl.org/dc/elements/1.1/"
 xmlns:sioc="http://rdfs.org/sioc/ns#"
 xmlns:sioct="http://rdfs.org/sioc/types#"
 xml:base="http://opengraphprotocol.org/schema/"
 xml:geo="http://www.w3.org/2003/01/geo/wgs84_pos#"
 xml:vcard="http://www.w3.org/2006/vcard/ns#">

<owl:Ontology rdf:about="http://opengraphprotocol.org/schema/">
  <dc:title xml:lang="en-US">Open Graph Protocol Schema</dc:title>
  <dc:description xml:lang="en-US">Schema for the Open Graph protocol.</dc:description>
  <dc:date rdf:datatype="http://www.w3.org/1999/XMLSchema#date">2010-04-29</dc:date>
</owl:Ontology>


<!-- Classes generated by Dan Brickley for the categories -->

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Band">
  <rdfs:label xml:lang="en-US">Band</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Governmental">
     <rdfs:label xml:lang="en-US">Governmental</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Non_profit">
     <rdfs:label xml:lang="en-US">Non profit</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/School">
     <rdfs:label xml:lang="en-US">School</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/University">
     <rdfs:label xml:lang="en-US">University</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Actor">
 <rdfs:label xml:lang="en-US">Actor</rdfs:label>
 <rdfs:subClassOf rdf:resource="http://xmlns.com/foaf/0.1/Person"/>
 <owl:equivalentClass rdf:resource="http://dbpedia.org/resource/Actor"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Athlete">
  <rdfs:label xml:lang="en-US">Athlete</rdfs:label>
  <rdfs:subClassOf rdf:resource="http://xmlns.com/foaf/0.1/Person"/>
  <owl:equivalentClass rdf:resource="http://dbpedia.org/resource/Athlete"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Author">
  <rdfs:label xml:lang="en-US">Author</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Director">
  <rdfs:label xml:lang="en-US">Director</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Musician">
  <rdfs:label xml:lang="en-US">Musician</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Politician">
  <rdfs:label xml:lang="en-US">Politician</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Public_figure">
  <rdfs:label xml:lang="en-US">Public Figure</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/City">
  <rdfs:label xml:lang="en-US">City</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Country">
  <rdfs:label xml:lang="en-US">Country</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Landmark">
  <rdfs:label xml:lang="en-US">Landmark</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/State_province">
  <rdfs:label xml:lang="en-US">State or Province</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Album">
  <rdfs:label xml:lang="en-US">Album</rdfs:label>
  <owl:equivalentClass rdf:resource="http://dbpedia.org/resource/Album"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Book">
  <rdfs:label xml:lang="en-US">Book</rdfs:label>
  <owl:equivalentClass rdf:resource="http://purl.org/ontology/bibo/Book"/>
  <owl:equivalentClass rdf:resource="http://dbpedia.org/resource/Book"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Drink">
  <rdfs:label xml:lang="en-US">Drink</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Food">
  <rdfs:label xml:lang="en-US">Food</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Game">
  <rdfs:label xml:lang="en-US">Game</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Movie">
  <rdfs:label xml:lang="en-US">Movie</rdfs:label>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Website">
  <rdfs:label xml:lang="en-US">Website</rdfs:label>
  <rdfs:seeAlso rdf:resource="http://rdfs.org/sioc/ns#Site"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Blog">
  <rdfs:label xml:lang="en-US">Blog</rdfs:label>
  <rdfs:seeAlso rdf:resource="http://rdfs.org/sioc/types#Weblog"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>

<rdfs:Class rdf:about="http://opengraphprotocol.org/schema/Article">
  <rdfs:label xml:lang="en-US">Article</rdfs:label>
  <rdfs:seeAlso rdf:resource="http://rdfs.org/sioc/ns#Post"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdfs:Class>


<!-- Properties defined at www2010 with exact mapping -->

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/title">
 <rdfs:label xml:lang="en-US">title</rdfs:label>
 <rdfs:comment xml:lang="en-US">The title of the object as it should appear within the graph, e.g.,  "The Rock".</rdfs:comment>
 <rdfs:subPropertyOf rdf:resource="http://www.w3.org/2000/01/rdf-schema#label"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/description">
 <rdfs:label xml:lang="en-US">description</rdfs:label>
 <rdfs:comment xml:lang="en-US">A one to two sentence description of your object.</rdfs:comment>
 <rdfs:subPropertyOf rdf:resource="http://www.w3.org/2000/01/rdf-schema#comments"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdf:Property>


<!-- Properties defined at www2010 with loose mapping because of alignment problems and to maintain simple RDFa markup -->

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/image">
 <rdfs:label xml:lang="en-US">image</rdfs:label>
 <rdfs:comment xml:lang="en-US">An image URL which should represent your object within the graph.</rdfs:comment>
 <rdfs:seeAlso rdf:resource="http://xmlns.com/foaf/0.1/depiction"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/url">
 <rdfs:label xml:lang="en-US">url</rdfs:label>
 <rdfs:comment xml:lang="en-US">The canonical URL of your object that will be used as its permanent ID  in the graph, e.g., "http://www.imdb.com/title/tt0117500/".</rdfs:comment>
 <rdfs:seeAlso rdf:resource="http://xmlns.com/foaf/0.1/homepage"/>
 <rdfs:seeAlso rdf:resource="http://purl.org/dc/elements/1.1/identifier"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/type">
 <rdfs:label xml:lang="en-US">type</rdfs:label>
 <rdfs:comment xml:lang="en-US">The type of your  object, e.g., "movie".  Depending on the type you specify, other  properties may also be required.</rdfs:comment>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/1999/02/22-rdf-syntax-ns#type"/>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/site_name">
 <rdfs:label xml:lang="en-US">site name</rdfs:label>
 <rdfs:comment xml:lang="en-US">If your object is part of a larger web site, the name which should be  displayed for the overall site. e.g., "IMDb".</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
</rdf:Property>


<rdf:Property rdf:about="http://opengraphprotocol.org/schema/latitude">
 <rdfs:label xml:lang="en-US">latitude</rdfs:label>
 <rdfs:comment xml:lang="en-US">The latitude of the resource e.g., the latitude of a company.</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/2003/01/geo/wgs84_pos#lat"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/longitude">
 <rdfs:label xml:lang="en-US">longitude</rdfs:label>
 <rdfs:comment xml:lang="en-US">The longitude of the resource e.g., the longitude of a  company.</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/2003/01/geo/wgs84_pos#long"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/street-address">
 <rdfs:label xml:lang="en-US">street address</rdfs:label>
 <rdfs:comment xml:lang="en-US">The street address of the resource e.g., "1601 S California Ave".</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/2006/vcard/ns#street-address"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/locality">
 <rdfs:label xml:lang="en-US">locality</rdfs:label>
 <rdfs:comment xml:lang="en-US">The locality of the resource e.g, "Palo Alto"</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/2006/vcard/ns#locality"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/region">
 <rdfs:label xml:lang="en-US">region</rdfs:label>
 <rdfs:comment xml:lang="en-US">The region of the resource e.g., "CA"</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/2006/vcard/ns#region"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/postal-code">
 <rdfs:label xml:lang="en-US">postal code</rdfs:label>
 <rdfs:comment xml:lang="en-US">The postal code of the resource e.g., "94304"</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/2006/vcard/ns#postal-code"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/country-name">
 <rdfs:label xml:lang="en-US">country name</rdfs:label>
 <rdfs:comment xml:lang="en-US">The country name of the resource e.g., "USA"</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://www.w3.org/2006/vcard/ns#country-name"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/email">
 <rdfs:label xml:lang="en-US">email</rdfs:label>
 <rdfs:comment xml:lang="en-US">Email of the contact for your object.</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://xmlns.com/foaf/0.1/mbox"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/phone_number">
 <rdfs:label xml:lang="en-US">phone number</rdfs:label>
 <rdfs:comment xml:lang="en-US">Phone number of the contact for your object.</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://xmlns.com/foaf/0.1/phone"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/fax_number">
 <rdfs:label xml:lang="en-US">fax number</rdfs:label>
 <rdfs:comment xml:lang="en-US">Fax number of the contact for your object.</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso  rdf:resource="http://xmlns.com/foaf/0.1/phone"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/upc">
 <rdfs:label xml:lang="en-US">upc</rdfs:label>
 <rdfs:label xml:lang="en-US">universal product code</rdfs:label>
 <rdfs:comment xml:lang="en-US">Universal  Product Code for your  object.</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://purl.org/goodrelations/v1#hasEAN_UCC-13"/>
</rdf:Property>

<rdf:Property rdf:about="http://opengraphprotocol.org/schema/isbn">
 <rdfs:label xml:lang="en-US">isbn</rdfs:label>
 <rdfs:label xml:lang="en-US">International Standard Book Number</rdfs:label>
 <rdfs:comment xml:lang="en-US">International Standard Book Number for your object.</rdfs:comment>
 <rdfs:isDefinedBy rdf:resource="http://opengraphprotocol.org/schema/"/>
 <rdfs:seeAlso rdf:resource="http://purl.org/ontology/bibo/isbn"/>
</rdf:Property>

</rdf:RDF>