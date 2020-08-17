<?php
return [
    [
        'title' => '基本配置',
        'show' => true,
        'icon' => 'fas fa-briefcase',
        'items' => [
            ['title' => '标签管理', 'route' => route('edu.admin.tag.index'), 'permission' => 'tags'],
        ],
    ],
    [
        'title' => '课程管理',
        'show' => true,
        'icon' => 'fas fa-box',
        'items' => [
            ['title' => '课程列表', 'route' => route('edu.admin.lesson.index'), 'permission' => 'lesson-index'],
            ['title' => '发布课程', 'route' => route('edu.admin.lesson.create'), 'permission' => 'add-lesson'],
        ],
    ],
    [
        'title' => '系统课程',
        'items' => [
            ['title' => '系统课程', 'permission' => 'system'],
            ['title' => '添加系统课程', 'permission' => 'add-system'],
        ]
    ],
    [
        'title' => '会员订单',
        'items' => [
            ['title' => '会员套餐', 'permission' => 'pcakage-index'],
            ['title' => '订单列表', 'permission' => 'orders'],
        ]
    ]
];
