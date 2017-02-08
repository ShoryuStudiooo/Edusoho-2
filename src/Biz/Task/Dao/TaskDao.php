<?php

namespace Biz\Task\Dao;

use Codeages\Biz\Framework\Dao\GeneralDaoInterface;

interface TaskDao extends GeneralDaoInterface
{
    public function deleteByCategoryId($categoryId);

    public function findByCourseId($courseId);

    public function findByCourseIds($courseIds);

    public function findByActivityIds($activityIds);

    public function findByIds($ids);

    public function findByCourseIdAndIsFree($ids, $isFree);

    public function getMaxSeqByCourseId($courseId);

    public function getNextTaskByCourseIdAndSeq($courseId, $seq);

    public function getPreTaskByCourseIdAndSeq($courseId, $seq);

    public function getByChapterIdAndMode($chapterId, $mode);

    public function findByChapterId($chapterId);

    public function getMinSeqByCourseId($courseId);

    public function getByCourseIdAndSeq($courseId, $sql);

    /**
     * 统计当前时间以后每天的直播次数
     *
     * @param $courseSetIds
     * @param $limit
     *
     * @return array <string, int|string>
     */
    public function findFutureLiveDatesByCourseSetIdsGroupByDate($courseSetIds, $limit);

    /**
     * 返回过去直播过的课程ID
     *
     * @return array<int>
     */
    public function findPastLivedCourseSetIds();

    public function getTaskByCourseIdAndActivityId($courseId, $activityId);

    public function sumCourseSetLearnedTimeByCourseSetId($courseSetId);

    public function analysisTaskDataByTime($startTime, $endTime);
}
