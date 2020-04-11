## Requirements
- PHP >= 7.0.0
- Laravel >= 5.5.0
- Fileinfo PHP Extension

## install
```
composer require everan/unlimitedclassified
```

## use
```
public function tree(UnlimitedClassified $unlimitedClassified) 
{
    $response = $unlimitedClassified->getUnlimitedClassified($data, $parent_key, $child_key);
}

or

public function tree() 
{
    $response = app('unlimited_classified')->getUnlimitedClassified($data, $parent_key, $child_key);
}
```

## example
```
$data = [
    ['id'=>1,'pid'=>0,'name'=>1],
    ['id'=>2,'pid'=>0,'name'=>2],
    ['id'=>3,'pid'=>1,'name'=>3],
    ['id'=>4,'pid'=>2,'name'=>4],
    ['id'=>5,'pid'=>3,'name'=>5],
    ['id'=>6,'pid'=>4,'name'=>6],
    ['id'=>7,'pid'=>5,'name'=>7],
    ['id'=>8,'pid'=>6,'name'=>8],
];

$tree = app('unlimited_classified')->getUnlimitedClassified（$data, 'pid','child');
print_r($tree);

Array
(
    [0] => Array
        (
            [id] => 1
            [pid] => 0
            [name] => 1
            [child] => Array
                (
                    [0] => Array
                        (
                            [id] => 3
                            [pid] => 1
                            [name] => 3
                            [child] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 5
                                            [pid] => 3
                                            [name] => 5
                                            [child] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [id] => 7
                                                            [pid] => 5
                                                            [name] => 7
                                                        )

                                                )

                                        )

                                )

                        )

                )

        )

    [1] => Array
        (
            [id] => 2
            [pid] => 0
            [name] => 2
            [child] => Array
                (
                    [0] => Array
                        (
                            [id] => 4
                            [pid] => 2
                            [name] => 4
                            [child] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 6
                                            [pid] => 4
                                            [name] => 6
                                            [child] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [id] => 8
                                                            [pid] => 6
                                                            [name] => 8
                                                        )

                                                )

                                        )

                                )

                        )

                )

        )

)
```

## License
MIT

