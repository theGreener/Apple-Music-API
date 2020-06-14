# Apple Music API

## Table of Contents

* [ActivityResponse](#activityresponse)
* [AlbumCollection](#albumcollection)
    * [__construct](#__construct)
    * [getIterator](#getiterator)
    * [count](#count)
    * [addItem](#additem)
    * [getItemByAlbumName](#getitembyalbumname)
* [AlbumHydrator](#albumhydrator)
    * [__construct](#__construct-1)
    * [hydrate](#hydrate)
* [AlbumManager](#albummanager)
    * [__construct](#__construct-2)
    * [getAlbum](#getalbum)
    * [getAlbumsByArtistId](#getalbumsbyartistid)
    * [findAlbum](#findalbum)
* [AlbumRelationship](#albumrelationship)
    * [__construct](#__construct-3)
    * [getHref](#gethref)
    * [setHref](#sethref)
    * [getData](#getdata)
    * [setData](#setdata)
    * [getNext](#getnext)
    * [setNext](#setnext)
* [AlbumResponse](#albumresponse)
* [AppleCurator](#applecurator)
    * [getId](#getid)
    * [setId](#setid)
    * [getHref](#gethref-1)
    * [setHref](#sethref-1)
    * [getRelationships](#getrelationships)
    * [setRelationships](#setrelationships)
    * [getType](#gettype)
    * [setType](#settype)
    * [__construct](#__construct-4)
* [AppleCuratorResponse](#applecuratorresponse)
* [ArrayCollection](#arraycollection)
    * [__construct](#__construct-5)
    * [getIterator](#getiterator-1)
    * [count](#count-1)
* [ArtistCollection](#artistcollection)
    * [__construct](#__construct-6)
    * [getIterator](#getiterator-2)
    * [count](#count-2)
    * [addItem](#additem-1)
    * [getItemByArtistName](#getitembyartistname)
* [ArtistHydrator](#artisthydrator)
    * [hydrate](#hydrate-1)
* [ArtistManager](#artistmanager)
    * [__construct](#__construct-7)
    * [get](#get)
    * [getAll](#getall)
    * [find](#find)
* [ArtistResponse](#artistresponse)
* [Artwork](#artwork)
    * [__construct](#__construct-8)
    * [getBgColor](#getbgcolor)
    * [setBgColor](#setbgcolor)
    * [getHeight](#getheight)
    * [setHeight](#setheight)
    * [getWidth](#getwidth)
    * [setWidth](#setwidth)
    * [getTextColor1](#gettextcolor1)
    * [setTextColor1](#settextcolor1)
    * [getTextColor2](#gettextcolor2)
    * [setTextColor2](#settextcolor2)
    * [getTextColor3](#gettextcolor3)
    * [setTextColor3](#settextcolor3)
    * [getTextColor4](#gettextcolor4)
    * [setTextColor4](#settextcolor4)
    * [getUrl](#geturl)
    * [setUrl](#seturl)
* [ArtworkHydrator](#artworkhydrator)
    * [hydrate](#hydrate-2)
* [ArtworkManager](#artworkmanager)
    * [__construct](#__construct-9)
* [BadRequestException](#badrequestexception)
* [Chart](#chart)
    * [__construct](#__construct-10)
    * [getChart](#getchart)
    * [setChart](#setchart)
    * [getData](#getdata-1)
    * [setData](#setdata-1)
    * [getHref](#gethref-2)
    * [setHref](#sethref-2)
    * [getName](#getname)
    * [setName](#setname)
    * [getNext](#getnext-1)
    * [setNext](#setnext-1)
* [Curator](#curator)
    * [getId](#getid-1)
    * [setId](#setid-1)
    * [getHref](#gethref-3)
    * [setHref](#sethref-3)
    * [getRelationships](#getrelationships-1)
    * [setRelationships](#setrelationships-1)
    * [getType](#gettype-1)
    * [setType](#settype-1)
    * [__construct](#__construct-11)
* [CuratorResponse](#curatorresponse)
* [EditorialNotes](#editorialnotes)
    * [__construct](#__construct-12)
    * [getShort](#getshort)
    * [setShort](#setshort)
    * [getStandard](#getstandard)
    * [setStandard](#setstandard)
* [Genre](#genre)
    * [getId](#getid-2)
    * [setId](#setid-2)
    * [getHref](#gethref-4)
    * [setHref](#sethref-4)
    * [getRelationships](#getrelationships-2)
    * [setRelationships](#setrelationships-2)
    * [getType](#gettype-2)
    * [setType](#settype-2)
    * [__construct](#__construct-13)
    * [getName](#getname-1)
    * [setName](#setname-1)
* [GenreResponse](#genreresponse)
* [HistoryResponse](#historyresponse)
* [KeyService](#keyservice)
    * [__construct](#__construct-14)
    * [getUserToken](#getusertoken)
    * [getPrivateKeyFilePath](#getprivatekeyfilepath)
    * [getKeyID](#getkeyid)
    * [getTeamID](#getteamid)
* [LibraryAlbum](#libraryalbum)
    * [getId](#getid-3)
    * [setId](#setid-3)
    * [getHref](#gethref-5)
    * [setHref](#sethref-5)
    * [getRelationships](#getrelationships-3)
    * [setRelationships](#setrelationships-3)
    * [getType](#gettype-3)
    * [setType](#settype-3)
    * [__construct](#__construct-15)
* [LibraryAlbumRelationship](#libraryalbumrelationship)
    * [__construct](#__construct-16)
    * [getHref](#gethref-6)
    * [setHref](#sethref-6)
    * [getData](#getdata-2)
    * [setData](#setdata-2)
    * [getNext](#getnext-2)
    * [setNext](#setnext-2)
* [LibraryAlbumResponse](#libraryalbumresponse)
* [LibraryArtist](#libraryartist)
    * [getName](#getname-2)
    * [setName](#setname-2)
    * [getId](#getid-4)
    * [setId](#setid-4)
    * [getHref](#gethref-7)
    * [setHref](#sethref-7)
    * [getRelationships](#getrelationships-4)
    * [setRelationships](#setrelationships-4)
    * [getType](#gettype-4)
    * [setType](#settype-4)
    * [__construct](#__construct-17)
* [LibraryArtistResponse](#libraryartistresponse)
* [LibraryMusicVideo](#librarymusicvideo)
    * [getId](#getid-5)
    * [setId](#setid-5)
    * [getHref](#gethref-8)
    * [setHref](#sethref-8)
    * [getRelationships](#getrelationships-5)
    * [setRelationships](#setrelationships-5)
    * [getType](#gettype-5)
    * [setType](#settype-5)
    * [__construct](#__construct-18)
* [LibraryMusicVideoResponse](#librarymusicvideoresponse)
* [LibraryPlaylist](#libraryplaylist)
    * [getId](#getid-6)
    * [setId](#setid-6)
    * [getHref](#gethref-9)
    * [setHref](#sethref-9)
    * [getRelationships](#getrelationships-6)
    * [setRelationships](#setrelationships-6)
    * [getType](#gettype-6)
    * [setType](#settype-6)
    * [__construct](#__construct-19)
    * [getCanEdit](#getcanedit)
    * [setCanEdit](#setcanedit)
* [LibraryPlaylistResponse](#libraryplaylistresponse)
* [LibrarySearchResponse](#librarysearchresponse)
* [LibrarySearchResults](#librarysearchresults)
    * [__construct](#__construct-20)
    * [getLibraryAlbums](#getlibraryalbums)
    * [setLibraryAlbums](#setlibraryalbums)
    * [getLibraryArtists](#getlibraryartists)
    * [setLibraryArtists](#setlibraryartists)
    * [getLibraryMusicVideos](#getlibrarymusicvideos)
    * [setLibraryMusicVideos](#setlibrarymusicvideos)
    * [getLibraryPlaylists](#getlibraryplaylists)
    * [setLibraryPlaylists](#setlibraryplaylists)
    * [getLibrarySongs](#getlibrarysongs)
    * [setLibrarySongs](#setlibrarysongs)
* [LibrarySong](#librarysong)
    * [getId](#getid-7)
    * [setId](#setid-7)
    * [getHref](#gethref-10)
    * [setHref](#sethref-10)
    * [getRelationships](#getrelationships-7)
    * [setRelationships](#setrelationships-7)
    * [getType](#gettype-7)
    * [setType](#settype-7)
    * [__construct](#__construct-21)
* [LibrarySongResponse](#librarysongresponse)
* [LibraryTrackRelationship](#librarytrackrelationship)
    * [__construct](#__construct-22)
    * [getHref](#gethref-11)
    * [setHref](#sethref-11)
    * [getData](#getdata-3)
    * [setData](#setdata-3)
    * [getNext](#getnext-3)
    * [setNext](#setnext-3)
* [MusicVideoResponse](#musicvideoresponse)
* [NotFoundException](#notfoundexception)
* [PlaylistResponse](#playlistresponse)
* [PlayParameters](#playparameters)
    * [__construct](#__construct-23)
    * [getId](#getid-8)
    * [setId](#setid-8)
    * [getKind](#getkind)
    * [setKind](#setkind)
    * [getIsLibrary](#getislibrary)
    * [setIsLibrary](#setislibrary)
    * [getReporting](#getreporting)
    * [setReporting](#setreporting)
    * [getCatalogId](#getcatalogid)
    * [setCatalogId](#setcatalogid)
* [Rating](#rating)
    * [getId](#getid-9)
    * [setId](#setid-9)
    * [getHref](#gethref-12)
    * [setHref](#sethref-12)
    * [getRelationships](#getrelationships-8)
    * [setRelationships](#setrelationships-8)
    * [getType](#gettype-8)
    * [setType](#settype-8)
    * [__construct](#__construct-24)
    * [getValue](#getvalue)
    * [setValue](#setvalue)
* [RatingRequest](#ratingrequest)
    * [getId](#getid-10)
    * [setId](#setid-10)
    * [getHref](#gethref-13)
    * [setHref](#sethref-13)
    * [getRelationships](#getrelationships-9)
    * [setRelationships](#setrelationships-9)
    * [getType](#gettype-9)
    * [setType](#settype-9)
    * [__construct](#__construct-25)
    * [getValue](#getvalue-1)
    * [setValue](#setvalue-1)
* [RatingResponse](#ratingresponse)
* [RecentlyAddedResponse](#recentlyaddedresponse)
* [RecommendationResponse](#recommendationresponse)
* [Relationship](#relationship)
    * [__construct](#__construct-26)
    * [getHref](#gethref-14)
    * [setHref](#sethref-14)
    * [getData](#getdata-4)
    * [setData](#setdata-4)
    * [getNext](#getnext-4)
    * [setNext](#setnext-4)
* [Resource](#resource)
    * [getId](#getid-11)
    * [setId](#setid-11)
    * [getHref](#gethref-15)
    * [setHref](#sethref-15)
    * [getRelationships](#getrelationships-10)
    * [setRelationships](#setrelationships-10)
    * [getType](#gettype-10)
    * [setType](#settype-10)
* [SearchHints](#searchhints)
    * [__construct](#__construct-27)
    * [getTerms](#getterms)
    * [setTerms](#setterms)
* [SearchHintsResponse](#searchhintsresponse)
* [SearchResponse](#searchresponse)
* [SearchResults](#searchresults)
    * [__construct](#__construct-28)
    * [getActivities](#getactivities)
    * [setActivities](#setactivities)
    * [getAlbums](#getalbums)
    * [setAlbums](#setalbums)
    * [getAppleCurators](#getapplecurators)
    * [setAppleCurators](#setapplecurators)
    * [getArtists](#getartists)
    * [setArtists](#setartists)
    * [getCurators](#getcurators)
    * [setCurators](#setcurators)
    * [getMusicVideos](#getmusicvideos)
    * [setMusicVideos](#setmusicvideos)
    * [getPlaylists](#getplaylists)
    * [setPlaylists](#setplaylists)
    * [getSongs](#getsongs)
    * [setSongs](#setsongs)
    * [getStations](#getstations)
    * [setStations](#setstations)
* [ServiceManager](#servicemanager)
    * [__construct](#__construct-29)
    * [getArtist](#getartist)
    * [getArtistFromCatalog](#getartistfromcatalog)
    * [getArtists](#getartists-1)
    * [searchArtist](#searchartist)
    * [searchArtistInCatalog](#searchartistincatalog)
    * [getAlbumsByArtist](#getalbumsbyartist)
    * [getAlbumsByArtistFromCatalog](#getalbumsbyartistfromcatalog)
    * [searchAlbum](#searchalbum)
    * [searchAlbumInCatalog](#searchalbumincatalog)
    * [getAlbum](#getalbum-1)
    * [getAlbumFromCatalog](#getalbumfromcatalog)
    * [getTrackOnAlbumByAlbumId](#gettrackonalbumbyalbumid)
    * [getTrackOnAlbumByAlbumIdInCatalog](#gettrackonalbumbyalbumidincatalog)
* [SongResponse](#songresponse)
* [Source](#source)
    * [__construct](#__construct-30)
    * [getParameter](#getparameter)
    * [setParameter](#setparameter)
    * [getPointer](#getpointer)
    * [setPointer](#setpointer)
* [StationResponse](#stationresponse)
* [Storefront](#storefront)
    * [getId](#getid-12)
    * [setId](#setid-12)
    * [getHref](#gethref-16)
    * [setHref](#sethref-16)
    * [getRelationships](#getrelationships-11)
    * [setRelationships](#setrelationships-11)
    * [getType](#gettype-11)
    * [setType](#settype-11)
    * [__construct](#__construct-31)
    * [getDefaultLanguageTag](#getdefaultlanguagetag)
    * [setDefaultLanguageTag](#setdefaultlanguagetag)
    * [getSupportedLanguageTags](#getsupportedlanguagetags)
    * [setSupportedLanguageTags](#setsupportedlanguagetags)
    * [getExplicitContentPolicy](#getexplicitcontentpolicy)
    * [setExplicitContentPolicy](#setexplicitcontentpolicy)
    * [getName](#getname-3)
    * [setName](#setname-3)
* [StorefrontResponse](#storefrontresponse)
* [TrackCollection](#trackcollection)
    * [__construct](#__construct-32)
    * [getIterator](#getiterator-3)
    * [count](#count-3)
    * [addItem](#additem-2)
* [TrackHydrator](#trackhydrator)
    * [hydrate](#hydrate-3)
* [TrackManager](#trackmanager)
    * [__construct](#__construct-33)

## ActivityResponse

Class ActivityResponse



* Full name: \AppleMusic\Model\ActivityResponse
* Parent class: 


## AlbumCollection

Class AlbumCollection



* Full name: \AppleMusic\Model\Collection\AlbumCollection
* Parent class: \AppleMusic\Model\Collection\ArrayCollection


### __construct

ArrayCollection constructor.

```php
AlbumCollection::__construct( array $items = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **array** |  |




---

### getIterator



```php
AlbumCollection::getIterator(  ): \ArrayIterator
```







---

### count



```php
AlbumCollection::count(  ): integer
```







---

### addItem



```php
AlbumCollection::addItem( string $key, \AppleMusic\Model\Album $item )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$item` | **\AppleMusic\Model\Album** |  |




---

### getItemByAlbumName



```php
AlbumCollection::getItemByAlbumName( string $albumName ): \AppleMusic\Model\Album
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$albumName` | **string** | [description] |




---

## AlbumHydrator





* Full name: \AppleMusic\Hydrator\AlbumHydrator


### __construct



```php
AlbumHydrator::__construct( \AppleMusic\Hydrator\ArtworkHydrator $artworkHydrator, \AppleMusic\Hydrator\TrackHydrator $trackHydrator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artworkHydrator` | **\AppleMusic\Hydrator\ArtworkHydrator** |  |
| `$trackHydrator` | **\AppleMusic\Hydrator\TrackHydrator** |  |




---

### hydrate



```php
AlbumHydrator::hydrate( \AppleMusic\Model\Album &$album,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$album` | **\AppleMusic\Model\Album** |  |
| `$data` | **** |  |




---

## AlbumManager





* Full name: \AppleMusic\Manager\AlbumManager


### __construct



```php
AlbumManager::__construct( \AppleMusic\HttpClient $client, \AppleMusic\Hydrator\AlbumHydrator $albumHydrator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\AppleMusic\HttpClient** |  |
| `$albumHydrator` | **\AppleMusic\Hydrator\AlbumHydrator** |  |




---

### getAlbum



```php
AlbumManager::getAlbum( string $id, string $source = \AppleMusic\HttpClient::SOURCE_USER ): \AppleMusic\Model\Album
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | [description] |
| `$source` | **string** | [description] |




---

### getAlbumsByArtistId



```php
AlbumManager::getAlbumsByArtistId( string $id, string $source = \AppleMusic\HttpClient::SOURCE_USER ): \AppleMusic\Model\Collection\AlbumCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$source` | **string** |  |




---

### findAlbum



```php
AlbumManager::findAlbum( string $searchTerm, string $source = \AppleMusic\HttpClient::SOURCE_USER ): \AppleMusic\Model\Collection\AlbumCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchTerm` | **string** |  |
| `$source` | **string** |  |




---

## AlbumRelationship

Class AlbumRelationship



* Full name: \AppleMusic\Model\AlbumRelationship
* Parent class: \AppleMusic\Model\Relationship


### __construct



```php
AlbumRelationship::__construct(  )
```







---

### getHref



```php
AlbumRelationship::getHref(  )
```







---

### setHref



```php
AlbumRelationship::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getData



```php
AlbumRelationship::getData(  )
```







---

### setData



```php
AlbumRelationship::setData( array $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getNext



```php
AlbumRelationship::getNext(  )
```







---

### setNext



```php
AlbumRelationship::setNext( \AppleMusic\Model\string $next )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **\AppleMusic\Model\string** |  |




---

## AlbumResponse

Class AlbumResponse



* Full name: \AppleMusic\Model\AlbumResponse
* Parent class: 


## AppleCurator

Class AppleCurator



* Full name: \AppleMusic\Model\AppleCurator
* Parent class: \AppleMusic\Model\Resource


### getId



```php
AppleCurator::getId(  )
```







---

### setId



```php
AppleCurator::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
AppleCurator::getHref(  )
```







---

### setHref



```php
AppleCurator::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
AppleCurator::getRelationships(  )
```







---

### setRelationships



```php
AppleCurator::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
AppleCurator::getType(  )
```







---

### setType



```php
AppleCurator::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
AppleCurator::__construct(  )
```







---

## AppleCuratorResponse

Class AppleCuratorResponse



* Full name: \AppleMusic\Model\AppleCuratorResponse
* Parent class: 


## ArrayCollection

Class ArrayCollection



* Full name: \AppleMusic\Model\Collection\ArrayCollection
* This class implements: \Countable, \IteratorAggregate


### __construct

ArrayCollection constructor.

```php
ArrayCollection::__construct( array $items = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **array** |  |




---

### getIterator



```php
ArrayCollection::getIterator(  ): \ArrayIterator
```







---

### count



```php
ArrayCollection::count(  ): integer
```







---

## ArtistCollection

Class ArtistCollection



* Full name: \AppleMusic\Model\Collection\ArtistCollection
* Parent class: \AppleMusic\Model\Collection\ArrayCollection


### __construct

ArrayCollection constructor.

```php
ArtistCollection::__construct( array $items = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **array** |  |




---

### getIterator



```php
ArtistCollection::getIterator(  ): \ArrayIterator
```







---

### count



```php
ArtistCollection::count(  ): integer
```







---

### addItem



```php
ArtistCollection::addItem( string $key, \AppleMusic\Model\Artist $item )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$item` | **\AppleMusic\Model\Artist** |  |




---

### getItemByArtistName



```php
ArtistCollection::getItemByArtistName( string $artistName ): \AppleMusic\Model\Artist
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artistName` | **string** | [description] |




---

## ArtistHydrator





* Full name: \AppleMusic\Hydrator\ArtistHydrator


### hydrate



```php
ArtistHydrator::hydrate( \AppleMusic\Model\Artist &$artist,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artist` | **\AppleMusic\Model\Artist** |  |
| `$data` | **** |  |




---

## ArtistManager





* Full name: \AppleMusic\Manager\ArtistManager


### __construct



```php
ArtistManager::__construct( \AppleMusic\HttpClient $client, \AppleMusic\Hydrator\ArtistHydrator $artistHydrator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\AppleMusic\HttpClient** |  |
| `$artistHydrator` | **\AppleMusic\Hydrator\ArtistHydrator** |  |




---

### get



```php
ArtistManager::get( string $id, string $source = \AppleMusic\HttpClient::SOURCE_USER ): \AppleMusic\Model\Artist
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | [description] |
| `$source` | **string** | [description] |




---

### getAll



```php
ArtistManager::getAll(  $source = \AppleMusic\HttpClient::SOURCE_USER )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **** |  |




---

### find



```php
ArtistManager::find(  $searchTerm,  $source = \AppleMusic\HttpClient::SOURCE_USER )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchTerm` | **** |  |
| `$source` | **** |  |




---

## ArtistResponse

Class ArtistResponse



* Full name: \AppleMusic\Model\ArtistResponse
* Parent class: 


## Artwork

Class Artwork



* Full name: \AppleMusic\Model\Artwork


### __construct



```php
Artwork::__construct(  )
```







---

### getBgColor



```php
Artwork::getBgColor(  )
```







---

### setBgColor



```php
Artwork::setBgColor( \AppleMusic\Model\string $bgColor )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bgColor` | **\AppleMusic\Model\string** |  |




---

### getHeight



```php
Artwork::getHeight(  )
```







---

### setHeight



```php
Artwork::setHeight( \AppleMusic\Model\int $height )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$height` | **\AppleMusic\Model\int** |  |




---

### getWidth



```php
Artwork::getWidth(  )
```







---

### setWidth



```php
Artwork::setWidth( \AppleMusic\Model\int $width )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **\AppleMusic\Model\int** |  |




---

### getTextColor1



```php
Artwork::getTextColor1(  )
```







---

### setTextColor1



```php
Artwork::setTextColor1( \AppleMusic\Model\string $textColor1 )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textColor1` | **\AppleMusic\Model\string** |  |




---

### getTextColor2



```php
Artwork::getTextColor2(  )
```







---

### setTextColor2



```php
Artwork::setTextColor2( \AppleMusic\Model\string $textColor2 )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textColor2` | **\AppleMusic\Model\string** |  |




---

### getTextColor3



```php
Artwork::getTextColor3(  )
```







---

### setTextColor3



```php
Artwork::setTextColor3( \AppleMusic\Model\string $textColor3 )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textColor3` | **\AppleMusic\Model\string** |  |




---

### getTextColor4



```php
Artwork::getTextColor4(  )
```







---

### setTextColor4



```php
Artwork::setTextColor4( \AppleMusic\Model\string $textColor4 )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textColor4` | **\AppleMusic\Model\string** |  |




---

### getUrl



```php
Artwork::getUrl(  )
```







---

### setUrl



```php
Artwork::setUrl( \AppleMusic\Model\string $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **\AppleMusic\Model\string** |  |




---

## ArtworkHydrator





* Full name: \AppleMusic\Hydrator\ArtworkHydrator


### hydrate



```php
ArtworkHydrator::hydrate( \AppleMusic\Model\Artwork &$artwork, object $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artwork` | **\AppleMusic\Model\Artwork** |  |
| `$data` | **object** |  |




---

## ArtworkManager





* Full name: \AppleMusic\Manager\ArtworkManager


### __construct



```php
ArtworkManager::__construct( \AppleMusic\Hydrator\ArtworkHydrator $artworkHydrator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artworkHydrator` | **\AppleMusic\Hydrator\ArtworkHydrator** |  |




---

## BadRequestException





* Full name: \AppleMusic\Exception\BadRequestException
* Parent class: 


## Chart

Class Chart



* Full name: \AppleMusic\Model\Chart


### __construct



```php
Chart::__construct(  )
```







---

### getChart



```php
Chart::getChart(  )
```







---

### setChart



```php
Chart::setChart( \AppleMusic\Model\string $chart )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chart` | **\AppleMusic\Model\string** |  |




---

### getData



```php
Chart::getData(  )
```







---

### setData



```php
Chart::setData( array $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getHref



```php
Chart::getHref(  )
```







---

### setHref



```php
Chart::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getName



```php
Chart::getName(  )
```







---

### setName



```php
Chart::setName( \AppleMusic\Model\string $name )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\AppleMusic\Model\string** |  |




---

### getNext



```php
Chart::getNext(  )
```







---

### setNext



```php
Chart::setNext( string $next ): \AppleMusic\Model\Chart
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **string** |  |




---

## Curator

Class Curator



* Full name: \AppleMusic\Model\Curator
* Parent class: \AppleMusic\Model\Resource


### getId



```php
Curator::getId(  )
```







---

### setId



```php
Curator::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
Curator::getHref(  )
```







---

### setHref



```php
Curator::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
Curator::getRelationships(  )
```







---

### setRelationships



```php
Curator::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
Curator::getType(  )
```







---

### setType



```php
Curator::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
Curator::__construct(  )
```







---

## CuratorResponse

Class CuratorResponse



* Full name: \AppleMusic\Model\CuratorResponse
* Parent class: 


## EditorialNotes

Class EditorialNotes



* Full name: \AppleMusic\Model\EditorialNotes


### __construct



```php
EditorialNotes::__construct(  )
```







---

### getShort



```php
EditorialNotes::getShort(  )
```







---

### setShort



```php
EditorialNotes::setShort( \AppleMusic\Model\string $short )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$short` | **\AppleMusic\Model\string** |  |




---

### getStandard



```php
EditorialNotes::getStandard(  )
```







---

### setStandard



```php
EditorialNotes::setStandard( \AppleMusic\Model\string $standard )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$standard` | **\AppleMusic\Model\string** |  |




---

## Genre

Class Genre



* Full name: \AppleMusic\Model\Genre
* Parent class: \AppleMusic\Model\Resource


### getId



```php
Genre::getId(  )
```







---

### setId



```php
Genre::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
Genre::getHref(  )
```







---

### setHref



```php
Genre::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
Genre::getRelationships(  )
```







---

### setRelationships



```php
Genre::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
Genre::getType(  )
```







---

### setType



```php
Genre::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
Genre::__construct(  )
```







---

### getName



```php
Genre::getName(  )
```







---

### setName



```php
Genre::setName( \AppleMusic\Model\string $name )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\AppleMusic\Model\string** |  |




---

## GenreResponse

Class GenreResponse



* Full name: \AppleMusic\Model\GenreResponse
* Parent class: 


## HistoryResponse

Class HistoryResponse



* Full name: \AppleMusic\Model\HistoryResponse
* Parent class: 


## KeyService





* Full name: \AppleMusic\Utils\KeyService


### __construct



```php
KeyService::__construct( string $teamIdFile, string $keyIdFile, string $privateKeyFile, string $userTokenFile )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$teamIdFile` | **string** |  |
| `$keyIdFile` | **string** |  |
| `$privateKeyFile` | **string** |  |
| `$userTokenFile` | **string** |  |




---

### getUserToken



```php
KeyService::getUserToken(  ): string
```







---

### getPrivateKeyFilePath



```php
KeyService::getPrivateKeyFilePath(  )
```







---

### getKeyID



```php
KeyService::getKeyID(  ): string
```







---

### getTeamID



```php
KeyService::getTeamID(  ): string
```







---

## LibraryAlbum

Class LibraryAlbum



* Full name: \AppleMusic\Model\LibraryAlbum
* Parent class: \AppleMusic\Model\Resource


### getId



```php
LibraryAlbum::getId(  )
```







---

### setId



```php
LibraryAlbum::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
LibraryAlbum::getHref(  )
```







---

### setHref



```php
LibraryAlbum::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
LibraryAlbum::getRelationships(  )
```







---

### setRelationships



```php
LibraryAlbum::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
LibraryAlbum::getType(  )
```







---

### setType



```php
LibraryAlbum::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
LibraryAlbum::__construct(  )
```







---

## LibraryAlbumRelationship

Class LibraryAlbumRelationship



* Full name: \AppleMusic\Model\LibraryAlbumRelationship
* Parent class: \AppleMusic\Model\Relationship


### __construct



```php
LibraryAlbumRelationship::__construct(  )
```







---

### getHref



```php
LibraryAlbumRelationship::getHref(  )
```







---

### setHref



```php
LibraryAlbumRelationship::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getData



```php
LibraryAlbumRelationship::getData(  )
```







---

### setData



```php
LibraryAlbumRelationship::setData( array $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getNext



```php
LibraryAlbumRelationship::getNext(  )
```







---

### setNext



```php
LibraryAlbumRelationship::setNext( \AppleMusic\Model\string $next )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **\AppleMusic\Model\string** |  |




---

## LibraryAlbumResponse

Class LibraryAlbumResponse



* Full name: \AppleMusic\Model\LibraryAlbumResponse
* Parent class: 


## LibraryArtist

Class LibraryArtist



* Full name: \AppleMusic\Model\LibraryArtist
* Parent class: \AppleMusic\Model\Resource


### getName



```php
LibraryArtist::getName(  )
```







---

### setName



```php
LibraryArtist::setName( \AppleMusic\Model\string $name )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\AppleMusic\Model\string** |  |




---

### getId



```php
LibraryArtist::getId(  )
```







---

### setId



```php
LibraryArtist::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
LibraryArtist::getHref(  )
```







---

### setHref



```php
LibraryArtist::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
LibraryArtist::getRelationships(  )
```







---

### setRelationships



```php
LibraryArtist::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
LibraryArtist::getType(  )
```







---

### setType



```php
LibraryArtist::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
LibraryArtist::__construct(  )
```







---

## LibraryArtistResponse

Class LibraryArtistResponse



* Full name: \AppleMusic\Model\LibraryArtistResponse
* Parent class: 


## LibraryMusicVideo

Class LibraryMusicVideo



* Full name: \AppleMusic\Model\LibraryMusicVideo
* Parent class: \AppleMusic\Model\Resource


### getId



```php
LibraryMusicVideo::getId(  )
```







---

### setId



```php
LibraryMusicVideo::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
LibraryMusicVideo::getHref(  )
```







---

### setHref



```php
LibraryMusicVideo::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
LibraryMusicVideo::getRelationships(  )
```







---

### setRelationships



```php
LibraryMusicVideo::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
LibraryMusicVideo::getType(  )
```







---

### setType



```php
LibraryMusicVideo::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
LibraryMusicVideo::__construct(  )
```







---

## LibraryMusicVideoResponse

Class LibraryMusicVideoResponse



* Full name: \AppleMusic\Model\LibraryMusicVideoResponse
* Parent class: 


## LibraryPlaylist

Class LibraryPlaylist



* Full name: \AppleMusic\Model\LibraryPlaylist
* Parent class: \AppleMusic\Model\Resource


### getId



```php
LibraryPlaylist::getId(  )
```







---

### setId



```php
LibraryPlaylist::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
LibraryPlaylist::getHref(  )
```







---

### setHref



```php
LibraryPlaylist::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
LibraryPlaylist::getRelationships(  )
```







---

### setRelationships



```php
LibraryPlaylist::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
LibraryPlaylist::getType(  )
```







---

### setType



```php
LibraryPlaylist::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
LibraryPlaylist::__construct(  )
```







---

### getCanEdit



```php
LibraryPlaylist::getCanEdit(  )
```







---

### setCanEdit



```php
LibraryPlaylist::setCanEdit( \AppleMusic\Model\bool $canEdit )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$canEdit` | **\AppleMusic\Model\bool** |  |




---

## LibraryPlaylistResponse

Class LibraryPlaylistResponse



* Full name: \AppleMusic\Model\LibraryPlaylistResponse
* Parent class: 


## LibrarySearchResponse

Class LibrarySearchResponse



* Full name: \AppleMusic\Model\LibrarySearchResponse
* Parent class: 


## LibrarySearchResults

Class LibrarySearchResults



* Full name: \AppleMusic\Model\LibrarySearchResults


### __construct



```php
LibrarySearchResults::__construct(  )
```







---

### getLibraryAlbums



```php
LibrarySearchResults::getLibraryAlbums(  )
```







---

### setLibraryAlbums



```php
LibrarySearchResults::setLibraryAlbums( array $libraryAlbums )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$libraryAlbums` | **array** |  |




---

### getLibraryArtists



```php
LibrarySearchResults::getLibraryArtists(  )
```







---

### setLibraryArtists



```php
LibrarySearchResults::setLibraryArtists( array $libraryArtists )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$libraryArtists` | **array** |  |




---

### getLibraryMusicVideos



```php
LibrarySearchResults::getLibraryMusicVideos(  )
```







---

### setLibraryMusicVideos



```php
LibrarySearchResults::setLibraryMusicVideos( array $libraryMusicVideos )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$libraryMusicVideos` | **array** |  |




---

### getLibraryPlaylists



```php
LibrarySearchResults::getLibraryPlaylists(  )
```







---

### setLibraryPlaylists



```php
LibrarySearchResults::setLibraryPlaylists( array $libraryPlaylists )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$libraryPlaylists` | **array** |  |




---

### getLibrarySongs



```php
LibrarySearchResults::getLibrarySongs(  )
```







---

### setLibrarySongs



```php
LibrarySearchResults::setLibrarySongs( array $librarySongs )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$librarySongs` | **array** |  |




---

## LibrarySong

Class LibrarySong



* Full name: \AppleMusic\Model\LibrarySong
* Parent class: \AppleMusic\Model\Resource


### getId



```php
LibrarySong::getId(  )
```







---

### setId



```php
LibrarySong::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
LibrarySong::getHref(  )
```







---

### setHref



```php
LibrarySong::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
LibrarySong::getRelationships(  )
```







---

### setRelationships



```php
LibrarySong::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
LibrarySong::getType(  )
```







---

### setType



```php
LibrarySong::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
LibrarySong::__construct(  )
```







---

## LibrarySongResponse

Class LibrarySongResponse



* Full name: \AppleMusic\Model\LibrarySongResponse
* Parent class: 


## LibraryTrackRelationship

Class LibraryTrackRelationship



* Full name: \AppleMusic\Model\LibraryTrackRelationship
* Parent class: \AppleMusic\Model\Relationship


### __construct



```php
LibraryTrackRelationship::__construct(  )
```







---

### getHref



```php
LibraryTrackRelationship::getHref(  )
```







---

### setHref



```php
LibraryTrackRelationship::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getData



```php
LibraryTrackRelationship::getData(  )
```







---

### setData



```php
LibraryTrackRelationship::setData( array $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getNext



```php
LibraryTrackRelationship::getNext(  )
```







---

### setNext



```php
LibraryTrackRelationship::setNext( \AppleMusic\Model\string $next )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **\AppleMusic\Model\string** |  |




---

## MusicVideoResponse

Class MusicVideoResponse



* Full name: \AppleMusic\Model\MusicVideoResponse
* Parent class: 


## NotFoundException





* Full name: \AppleMusic\Exception\NotFoundException
* Parent class: 


## PlaylistResponse

Class PlaylistResponse



* Full name: \AppleMusic\Model\PlaylistResponse
* Parent class: 


## PlayParameters

Class PlayParameters



* Full name: \AppleMusic\Model\PlayParameters


### __construct



```php
PlayParameters::__construct(  )
```







---

### getId



```php
PlayParameters::getId(  )
```







---

### setId



```php
PlayParameters::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getKind



```php
PlayParameters::getKind(  )
```







---

### setKind



```php
PlayParameters::setKind( \AppleMusic\Model\string $kind )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **\AppleMusic\Model\string** |  |




---

### getIsLibrary



```php
PlayParameters::getIsLibrary(  )
```







---

### setIsLibrary



```php
PlayParameters::setIsLibrary( \AppleMusic\Model\bool $isLibrary )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isLibrary` | **\AppleMusic\Model\bool** |  |




---

### getReporting



```php
PlayParameters::getReporting(  )
```







---

### setReporting



```php
PlayParameters::setReporting( \AppleMusic\Model\bool $reporting )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reporting` | **\AppleMusic\Model\bool** |  |




---

### getCatalogId



```php
PlayParameters::getCatalogId(  )
```







---

### setCatalogId



```php
PlayParameters::setCatalogId( \AppleMusic\Model\string $catalogId )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$catalogId` | **\AppleMusic\Model\string** |  |




---

## Rating

Class Rating



* Full name: \AppleMusic\Model\Rating
* Parent class: \AppleMusic\Model\Resource


### getId



```php
Rating::getId(  )
```







---

### setId



```php
Rating::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
Rating::getHref(  )
```







---

### setHref



```php
Rating::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
Rating::getRelationships(  )
```







---

### setRelationships



```php
Rating::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
Rating::getType(  )
```







---

### setType



```php
Rating::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
Rating::__construct(  )
```







---

### getValue



```php
Rating::getValue(  )
```







---

### setValue



```php
Rating::setValue( \AppleMusic\Model\int $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\AppleMusic\Model\int** |  |




---

## RatingRequest

Class RatingRequest



* Full name: \AppleMusic\Model\RatingRequest
* Parent class: \AppleMusic\Model\Resource


### getId



```php
RatingRequest::getId(  )
```







---

### setId



```php
RatingRequest::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
RatingRequest::getHref(  )
```







---

### setHref



```php
RatingRequest::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
RatingRequest::getRelationships(  )
```







---

### setRelationships



```php
RatingRequest::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
RatingRequest::getType(  )
```







---

### setType



```php
RatingRequest::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
RatingRequest::__construct(  )
```







---

### getValue



```php
RatingRequest::getValue(  )
```







---

### setValue



```php
RatingRequest::setValue( \AppleMusic\Model\int $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\AppleMusic\Model\int** |  |




---

## RatingResponse

Class RatingResponse



* Full name: \AppleMusic\Model\RatingResponse
* Parent class: 


## RecentlyAddedResponse

Class RecentlyAddedResponse



* Full name: \AppleMusic\Model\RecentlyAddedResponse
* Parent class: 


## RecommendationResponse

Class RecommendationResponse



* Full name: \AppleMusic\Model\RecommendationResponse
* Parent class: 


## Relationship

Class Relationship



* Full name: \AppleMusic\Model\Relationship


### __construct



```php
Relationship::__construct(  )
```







---

### getHref



```php
Relationship::getHref(  )
```







---

### setHref



```php
Relationship::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getData



```php
Relationship::getData(  )
```







---

### setData



```php
Relationship::setData( array $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getNext



```php
Relationship::getNext(  )
```







---

### setNext



```php
Relationship::setNext( \AppleMusic\Model\string $next )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **\AppleMusic\Model\string** |  |




---

## Resource

Class Resource



* Full name: \AppleMusic\Model\Resource


### getId



```php
Resource::getId(  )
```







---

### setId



```php
Resource::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
Resource::getHref(  )
```







---

### setHref



```php
Resource::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
Resource::getRelationships(  )
```







---

### setRelationships



```php
Resource::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
Resource::getType(  )
```







---

### setType



```php
Resource::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

## SearchHints

Class SearchHints



* Full name: \AppleMusic\Model\SearchHints


### __construct



```php
SearchHints::__construct(  )
```







---

### getTerms



```php
SearchHints::getTerms(  )
```







---

### setTerms



```php
SearchHints::setTerms( array $terms )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$terms` | **array** |  |




---

## SearchHintsResponse

Class SearchHintsResponse



* Full name: \AppleMusic\Model\SearchHintsResponse
* Parent class: 


## SearchResponse

Class SearchResponse



* Full name: \AppleMusic\Model\SearchResponse
* Parent class: 


## SearchResults

Class SearchResults



* Full name: \AppleMusic\Model\SearchResults


### __construct



```php
SearchResults::__construct(  )
```







---

### getActivities



```php
SearchResults::getActivities(  )
```







---

### setActivities



```php
SearchResults::setActivities( array $activities )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$activities` | **array** |  |




---

### getAlbums



```php
SearchResults::getAlbums(  )
```







---

### setAlbums



```php
SearchResults::setAlbums( array $albums )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$albums` | **array** |  |




---

### getAppleCurators



```php
SearchResults::getAppleCurators(  )
```







---

### setAppleCurators



```php
SearchResults::setAppleCurators( array $appleCurators )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appleCurators` | **array** |  |




---

### getArtists



```php
SearchResults::getArtists(  )
```







---

### setArtists



```php
SearchResults::setArtists( array $artists )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artists` | **array** |  |




---

### getCurators



```php
SearchResults::getCurators(  )
```







---

### setCurators



```php
SearchResults::setCurators( array $curators )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$curators` | **array** |  |




---

### getMusicVideos



```php
SearchResults::getMusicVideos(  )
```







---

### setMusicVideos



```php
SearchResults::setMusicVideos( array $musicVideos )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$musicVideos` | **array** |  |




---

### getPlaylists



```php
SearchResults::getPlaylists(  )
```







---

### setPlaylists



```php
SearchResults::setPlaylists( array $playlists )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$playlists` | **array** |  |




---

### getSongs



```php
SearchResults::getSongs(  )
```







---

### setSongs



```php
SearchResults::setSongs( array $songs )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$songs` | **array** |  |




---

### getStations



```php
SearchResults::getStations(  )
```







---

### setStations



```php
SearchResults::setStations( array $stations )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stations` | **array** |  |




---

## ServiceManager





* Full name: \App\AppleMusic\ServiceManager


### __construct



```php
ServiceManager::__construct( \AppleMusic\Manager\AlbumManager $albumManager, \AppleMusic\Manager\ArtistManager $artistManager )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$albumManager` | **\AppleMusic\Manager\AlbumManager** |  |
| `$artistManager` | **\AppleMusic\Manager\ArtistManager** |  |




---

### getArtist



```php
ServiceManager::getArtist( string $id ): \App\AppleMusic\Artist
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### getArtistFromCatalog



```php
ServiceManager::getArtistFromCatalog( string $id ): \App\AppleMusic\Artist
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### getArtists



```php
ServiceManager::getArtists(  ): \App\AppleMusic\ArtistCollection
```







---

### searchArtist



```php
ServiceManager::searchArtist( string $searchTerm ): \App\AppleMusic\ArtistCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchTerm` | **string** | [description] |




---

### searchArtistInCatalog



```php
ServiceManager::searchArtistInCatalog( string $searchTerm ): \App\AppleMusic\ArtistCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchTerm` | **string** | [description] |




---

### getAlbumsByArtist



```php
ServiceManager::getAlbumsByArtist( string $artistID ): \App\AppleMusic\array[string]Album
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artistID` | **string** |  |




---

### getAlbumsByArtistFromCatalog



```php
ServiceManager::getAlbumsByArtistFromCatalog( string $artistID ): \App\AppleMusic\array[string]Album
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artistID` | **string** |  |




---

### searchAlbum



```php
ServiceManager::searchAlbum( string $searchTerm ): \App\AppleMusic\AlbumCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchTerm` | **string** | [description] |




---

### searchAlbumInCatalog



```php
ServiceManager::searchAlbumInCatalog( string $searchTerm ): \App\AppleMusic\AlbumCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchTerm` | **string** | [description] |




---

### getAlbum



```php
ServiceManager::getAlbum( string $id ): \App\AppleMusic\ArtistCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### getAlbumFromCatalog



```php
ServiceManager::getAlbumFromCatalog( string $id ): \App\AppleMusic\ArtistCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### getTrackOnAlbumByAlbumId



```php
ServiceManager::getTrackOnAlbumByAlbumId(  $id ): \App\AppleMusic\TrackCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **** |  |




---

### getTrackOnAlbumByAlbumIdInCatalog



```php
ServiceManager::getTrackOnAlbumByAlbumIdInCatalog(  $id ): \App\AppleMusic\TrackCollection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **** |  |




---

## SongResponse

Class SongResponse



* Full name: \AppleMusic\Model\SongResponse
* Parent class: 


## Source

Class Source



* Full name: \AppleMusic\Model\Error\Source


### __construct



```php
Source::__construct(  )
```







---

### getParameter



```php
Source::getParameter(  )
```







---

### setParameter



```php
Source::setParameter( \AppleMusic\Model\Error\string $parameter )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameter` | **\AppleMusic\Model\Error\string** |  |




---

### getPointer



```php
Source::getPointer(  )
```







---

### setPointer



```php
Source::setPointer( \AppleMusic\Model\Error\string $pointer )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pointer` | **\AppleMusic\Model\Error\string** |  |




---

## StationResponse

Class StationResponse



* Full name: \AppleMusic\Model\StationResponse
* Parent class: 


## Storefront

Class Storefront



* Full name: \AppleMusic\Model\Storefront
* Parent class: \AppleMusic\Model\Resource


### getId



```php
Storefront::getId(  )
```







---

### setId



```php
Storefront::setId( \AppleMusic\Model\string $id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\AppleMusic\Model\string** |  |




---

### getHref



```php
Storefront::getHref(  )
```







---

### setHref



```php
Storefront::setHref( \AppleMusic\Model\string $href )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **\AppleMusic\Model\string** |  |




---

### getRelationships



```php
Storefront::getRelationships(  )
```







---

### setRelationships



```php
Storefront::setRelationships( array $relationships )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relationships` | **array** |  |




---

### getType



```php
Storefront::getType(  )
```







---

### setType



```php
Storefront::setType( \AppleMusic\Model\string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\AppleMusic\Model\string** |  |




---

### __construct



```php
Storefront::__construct(  )
```







---

### getDefaultLanguageTag



```php
Storefront::getDefaultLanguageTag(  )
```







---

### setDefaultLanguageTag



```php
Storefront::setDefaultLanguageTag( \AppleMusic\Model\string $defaultLanguageTag )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultLanguageTag` | **\AppleMusic\Model\string** |  |




---

### getSupportedLanguageTags



```php
Storefront::getSupportedLanguageTags(  )
```







---

### setSupportedLanguageTags



```php
Storefront::setSupportedLanguageTags( array $supportedLanguageTags )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supportedLanguageTags` | **array** |  |




---

### getExplicitContentPolicy



```php
Storefront::getExplicitContentPolicy(  )
```







---

### setExplicitContentPolicy



```php
Storefront::setExplicitContentPolicy( \AppleMusic\Model\string $explicitContentPolicy )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$explicitContentPolicy` | **\AppleMusic\Model\string** |  |




---

### getName



```php
Storefront::getName(  )
```







---

### setName



```php
Storefront::setName( \AppleMusic\Model\string $name )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\AppleMusic\Model\string** |  |




---

## StorefrontResponse

Class StorefrontResponse



* Full name: \AppleMusic\Model\StorefrontResponse
* Parent class: 


## TrackCollection

Class TrackCollection



* Full name: \AppleMusic\Model\Collection\TrackCollection
* Parent class: \AppleMusic\Model\Collection\ArrayCollection


### __construct

ArrayCollection constructor.

```php
TrackCollection::__construct( array $items = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **array** |  |




---

### getIterator



```php
TrackCollection::getIterator(  ): \ArrayIterator
```







---

### count



```php
TrackCollection::count(  ): integer
```







---

### addItem



```php
TrackCollection::addItem( string $key, \AppleMusic\Model\Track $item )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$item` | **\AppleMusic\Model\Track** |  |




---

## TrackHydrator





* Full name: \AppleMusic\Hydrator\TrackHydrator


### hydrate



```php
TrackHydrator::hydrate( \AppleMusic\Model\Track &$track,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$track` | **\AppleMusic\Model\Track** |  |
| `$data` | **** |  |




---

## TrackManager





* Full name: \AppleMusic\Manager\TrackManager


### __construct



```php
TrackManager::__construct( \AppleMusic\Hydrator\TrackHydrator $trackHydrator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trackHydrator` | **\AppleMusic\Hydrator\TrackHydrator** |  |




---



--------
> This document was automatically generated from source code comments on 2020-06-14 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
