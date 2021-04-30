# SeeingEntity
 #### [PMMP PLUGIN] It's easy to see which entity the player is looking at.
<br>

> This plugin usage example

```
$entity = SeeingEntity::getSeeingEntity($player, "Human", 5); //The entity with the class name "Human" within the 5 spaces I'm looking at

if($entity === null){
	//NotFound
}
```