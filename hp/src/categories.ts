export type CategoryKey = 'strategy' | 'ai-tips' | 'abm';

export const CATEGORIES = {
  strategy: {
    slug: 'strategy',
    name: '経営戦略',
    description: '経営戦略に関する記事一覧',
  },
  'ai-tips': {
    slug: 'ai-tips',
    name: 'AI実務活用Tips',
    description: 'AI実務活用に関する記事一覧',
  },
  abm: {
    slug: 'abm',
    name: 'ABM',
    description: 'ABMに関する記事一覧',
  },
} as const;
