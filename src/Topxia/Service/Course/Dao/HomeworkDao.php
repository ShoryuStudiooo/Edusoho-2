<?php

namespace Topxia\Service\Course\Dao;

interface HomeworkDao
{
	public function getHomework($id);

    public function findHomeworkByCourseIdAndLessonIds($courseId, $lessonIds);

    public function findHomeworksByCreatedUserId($userId);
    
    public function getHomeworkByCourseIdAndLessonId($courseId, $lessonId);

	public function searchHomeworks($conditions, $sort, $start, $limit);

	public function addHomework($fields);

    public function updateHomework($id,$fields);

    public function deleteHomework($id);

    public function deleteHomeworksByCourseId($courseId);

    public function findHomeworkResultsByStatusAndCheckTeacherId($checkTeacherId, $status);

    public function findHomeworkResultsByCourseIdAndStatusAndCheckTeacherId($courseId,$checkTeacherId, $status);

    public function findHomeworkResultsByStatusAndStatusAndUserId($userId, $status);

    public function findAllHomeworksByCourseId($courseId);

}