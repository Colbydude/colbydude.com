import axios from 'axios';

const GITHUB_TOKEN = process.env.MIX_GITHUB_TOKEN;

// Create an instance of axios to set the base URL and remove global headers.
let instance = axios.create({
    baseURL: 'https://api.github.com',
    headers: {
        Authorization: `Bearer ${GITHUB_TOKEN}`
    }
});

/**
 * Fetches GitHub Contribution Information.
 *
 * @param  {String}  user
 * @return {Promise}
 */
export const contributions = (user) => {
    const query = `{
        user(login: "${user}") {
            contributionsCollection {
                contributionCalendar {
                    totalContributions,
                    weeks {
                        contributionDays {
                            date,
                            contributionCount
                        },
                    }
                }
            }
        }
    }`;

    return instance.post('/graphql', { query });
};

export default {
    contributions
};
